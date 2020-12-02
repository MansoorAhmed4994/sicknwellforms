function readAndShowFile(input, elemToShowImage) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            elemToShowImage.attr('src', e.target.result);
            elemToShowImage.addClass('show');
        }

        reader.readAsDataURL(input.files[0]);
    }
}

function selectInputText(obj) {
    var val = eval(obj);
    val.focus();
    val.select();
    val.setSelectionRange(0, 99999);
    document.execCommand("copy");
    showNotification('Copied', 'success')
}

function showNotification(text, type) {
    new Noty({
        theme: 'bootstrap-v4',
        text: text,
        type: type,
        timeout: 5000
    }).show();
}

$('.scrollbar-fancy').each(function(index, elem) {
    Scrollbar.init(elem, {
        alwaysShowTracks: true,
        renderByPixels: true
    });
})

$('#fakefilepicker').on('change', function() {
    readAndShowFile(this, $('#fp-display'))
})

$('#copyfield').on('click', function() {
    selectInputText(this)
})
$('[data-mask]').inputmask();

function resizeIframe(obj) {
    obj.style.height = obj.contentWindow.document.documentElement.scrollHeight + 'px';
}

function getFormattedDate(date) {
    var year = date.getFullYear(),
        month = ("0" + (date.getMonth() + 1)).slice(-2),
        date = ("0" + date.getDate()).slice(-2);
    return year + '/' + month + '/' + date;
}

function resetHiddenFields() {
    $('#date-hidden,#appointment_from-hidden,#appointment_to-hidden').val('');
}

function resetSlots() {
    $('.slots-items .slots-item').remove();
    $('.slots-items .message').html('No Slots available.<br />Please try some other date.');
}

function setLoadingStateInSlots() {
    $('.slots-items .slots-item').remove();
    $('.slots-items .message').text('Loading..').show();
    $('.datepicker-div').addClass('loading')
}

function json2array(json) {
    var result = [];
    var keys = Object.keys(json);
    keys.forEach(function(key) {
        result.push(json[key]);
    });
    return result;
}

function tConvert(time) {
    // Check correct time format and split into components
    time = time.toString().match(/^([01]\d|2[0-3])(:)([0-5]\d)(:[0-5]\d)?$/) || [time];

    if (time.length > 1) { // If time format correct
        time = time.slice(1); // Remove full string match value
        time[5] = +time[0] < 12 ? ' AM' : ' PM'; // Set AM/PM
        time[0] = +time[0] % 12 || 12; // Adjust hours
    }
    return time.join(''); // return adjusted time or original string
}

function getDateSlots(date) {
    var client_form_id = document.getElementById("client_forms_id").value;
    var var_table_name = document.getElementById("table_name").value;

    $.ajax({
        // url: base_url + "/api/slots/by-date",
        //  url: 'https://jsonplaceholder.typicode.com/todos',
        url: base_url + "/get-appointment",
        type: "GET",
        beforeSend: function() {
            setLoadingStateInSlots();
        },
        data: {
            date: date,
            cf_id: client_form_id,
            table_name: var_table_name
        },

        dataType: "json",
        success: function(data) {
            //alert(data)
            var times = json2array(data);
            // var times = [{
            //         appointment_from: "13:07:00",
            //         appointment_to: "14:30:00"
            //     },
            //     {
            //         appointment_from: "06:07:00",
            //         appointment_to: "09:30:00"
            //     },

            // ];
            //alert(JSON.stringify(data));
            var html = '';
            var timezone = $('#timezonepicker').val();
            var intervalAddedTime = moment().tz(timezone).add($('#time_before_interval').val(), 'minutes');


            var hasValidDates = false;
            times.forEach(function(item, index) {
                var start_date_limit = $('#start_date_limit').val()
                var end_date_limit = $('#end_date_limit').val();
                if (start_date_limit !== '' && end_date_limit !== '') {
                    var range = moment.range(start_date_limit, end_date_limit);
                    if (!range.contains(moment(date))) {
                        return false;
                    }
                }
                var d1 = tConvert(item.appointment_from.substring(0, item.appointment_from.length - 3));
                var d2 = tConvert(item.appointment_to.substring(0, item.appointment_to.length - 3));
                var appointmentTime = moment(date + ' ' + item.appointment_from);

                intervalAddedTime = moment(intervalAddedTime.format('YYYY-MM-DD hh:mm a'))
                appointmentTime = moment(appointmentTime.format('YYYY-MM-DD hh:mm a'))

                if (appointmentTime.isBefore(intervalAddedTime)) return;
                hasValidDates = true;
                // if (appointmentTime.isSame(intervalAddedTime) || appointmentTime.isBefore(intervalAddedTime)) return;
                html += '<div class="slots-item" data-d1="' + d1 + '" data-d2="' + d2 + '">' + d1 + '</div>'
            })
            if (times.length && hasValidDates) {
                $('.slots-items .message').hide();
            } else {
                resetSlots();
            }
            $('.slots-items').append(html)
            $('.datepicker-div').removeClass('loading')
        },
        error: function() {
            alert("Something went wrong. Try Again.");
        }
    })
}


var datepicker = $('.datepicker').datepicker({
    inline: true,
    language: 'en',
    dateFormat: 'yyyy/mm/dd',
    minDate: new Date(),
    onSelect: function(formattedDate) {
        var validDate = formattedDate !== '';
        var date = validDate ? formattedDate : 'Please select a date';
        resetHiddenFields();
        if (validDate) {
            getDateSlots(date);
            $('#date-hidden').val(date)
        } else {
            resetSlots();
        }
    },
}).data('datepicker')

$('.slots-items').on('click', '.slots-item', function() {
    $('.slots-items .slots-item').removeClass('selected')
    $(this).addClass('selected')
    $('.date-valset').val($(this).text())
    $('#appointment_from-hidden').val($(this).attr('data-d1'))
    $('#appointment_to-hidden').val($(this).attr('data-d2'))
})

$('.timezonePicker:not(.create)').on('change', function() {
    var date = $('#date-hidden').val();
    if (date !== '') {
        getDateSlots(date);
    }
})
$('.custom-wizard .nextprevbtn').on('click', function(e) {
    e.preventDefault()
    var parent = $(this).closest('.wizard-sec')
    var elem = $(this).hasClass('next') ? parent.next() : parent.prev();
    if ($('.main-content .scrollbar-fancy').length) {
        Scrollbar.get($('.main-content .scrollbar-fancy')[0]).scrollTo(0, 0, 0);
    } else {
        window.scrollTo(0, 0);
        $('.qcm-form').scrollTop(0);
    }
    $('.custom-wizard .wizard-sec').removeClass('active');
    elem.addClass('active');
    $('.main-content .scrollbar-track-y').hide();
})


// var timePickerOptions = {
//     dateFormat: ' ',
//     timeFormat: 'hh:ii aa',
//     timepicker: true,
//     classes: 'only-timepicker',
//     onSelect: function(formattedDate) {},
// };
// $('.timepicker').datepicker(timePickerOptions);

// var timePickerOptions = {
//     use12HourClock: true,
//     timeFormat: "%h:%i %a",
// }

// $('.timepicker').timepicker(timePickerOptions);


$('.create-client-form').on('submit', function() {
    if (typeof createClientValidator != 'undefined') {
        if (!createClientValidator.valid()) return;
    }
    $('.addtotablefields').attr('disabled', true)
})


var intervalTimeDiv = $($('.interval-time')[0]).clone();
var addBtn = intervalTimeDiv.find('.add-interval-time-btn');
addBtn.text('Delete -');
addBtn.toggleClass('add-interval-time-btn delete-interval-time-btn')

$(document).on('click', '.add-interval-time-btn', function(e) {
    e.preventDefault()
    var clone = intervalTimeDiv.clone();
    $(this).closest('.interval-times').append(clone);
    clone.find('.timeEntry').each(function(i, el) {
        $(this).timeEntry({
            ampmPrefix: ' '
        });
    })
    $('.appointmentDays').trigger('change');
})

$(document).on('click', '.delete-interval-time-btn', function(e) {
    e.preventDefault();
    $(this).closest('.interval-time').remove();
})

var intervalDiv = $($('.interval-item')[0]).clone();
intervalDiv.append($('<a href="" class="mt-2 link-style-btn text-right delete-interval-btn">Delete Interval -</a>'))

$('.add-new-interval-btn').on('click', function(e) {
    e.preventDefault()
    var clone = intervalDiv.clone();
    $('.intervals').append(clone);
    // clone.find('.appointmentDays').find(':selected').not(':first-child').removeAttr('selected')
    clone.find('.appointmentDays').select2()
    clone.find('.appointmentDays').trigger('change')
        // clone.find('.timepicker').timepicker(timePickerOptions)
    clone.find('.custom-tp').each(function(i, el) {
        customDatePicker(el)
    })

})

$('.timezonePicker,.appointmentDays').select2();



$(document).on('change', '.appointmentDays', function(e) {
    var classes = [];
    $(this).select2('data').forEach(function(item) {
        classes.push('day-' + item.text.toLowerCase())
    })
    var tp = $(this).closest('.interval-item').find('.interval-time');
    tp.removeClass(function(index, className) {
        return (className.match(/(^|\s)day-\S+/g) || []).join(' ');
    })
    tp.addClass(classes)
});

$('.appointmentDays').trigger('change')

$(document).on('click', '.delete-interval-btn', function(e) {
    e.preventDefault();
    $(this).closest('.interval-item').remove();
})

$('.clear-inputs-btn').on('click', function(e) {
    e.preventDefault();
    $(this).closest('.form-group').find('.clear-input').val('')
})

var limitPicker = $('.limitsPicker').datepicker({
    language: 'en',
    dateFormat: 'yyyy/mm/dd',
    minDate: new Date(),
});

$('.create-client-form').submit(function(e) {
    // return false;
    if (buildAppointments()) {
        return true;
    }
    return false
})
window['moment-range'].extendMoment(moment);

var date = '2020-12-01 ';
var f = 'YYYY-MM-DD hh:mm A';
var finalAppointments = [];

function buildAppointments() {
    if ($('#duration').val() == '') return;
    finalAppointments = []

    var appointments = {
        monday: [],
        tuesday: [],
        wednesday: [],
        thursday: [],
        friday: [],
        saturday: [],
        sunday: [],
    };
    var days = Object.keys(appointments);


    days.forEach(function(day) {

        var ranges = [];
        $('.interval-item').each(function(index, intervalItem) {
            $('.interval-time').each(function(index, timeContainer) {
                if (!$(timeContainer).hasClass('day-' + day)) return;

                var start_time = moment(date + $(timeContainer).find('.start_time').val(), f);
                var end_time = moment(date + $(timeContainer).find('.end_time').val(), f);

                ranges.push(moment.range(start_time, end_time));
            })
        })
        var uniqueRange = getUniqueRanges(ranges);
        if ($('.lunch_time_start').val() !== '' && $('.lunch_time_end').val() !== '') {
            uniqueRange = excludeLunchTime(uniqueRange, {
                start: $('.lunch_time_start').val(),
                end: $('.lunch_time_end').val(),
            });
        }
        appointments[day] = uniqueRange;
    })


    var appointmentDuration = parseInt($('#duration').val());

    days.forEach(function(d) {
        if (!appointments[d].length) return;
        appointments[d].forEach(function(range) {
            var start_time = range.start;
            var end_time = range.end;
            var day = d;
            var duration = appointmentDuration;
            while (start_time.isBefore(end_time)) {
                var start = start_time.format('hh:mm a');
                var end = start_time.add(parseInt(duration), 'minutes').format('hh:mm a');
                if (moment(date + end, f).isBefore(end_time) || moment(date + end, f).isSame(end_time)) {
                    finalAppointments.push({
                        day: day,
                        start_from: start,
                        end_at: end
                    })
                }
            }
        })
    });

    $('#hiddenappointments').val(JSON.stringify(finalAppointments));

    return true;
}

function getUniqueRanges(ranges) {
    var sortedRanges = ranges.sort(function(a, b) {
        return a.start.valueOf() - b.start.valueOf();
    })

    var i = 1;
    while (i < sortedRanges.length) {
        var prev = sortedRanges[i - 1];
        var curr = sortedRanges[i];
        if (curr.overlaps(prev, { adjacent: true })) {
            sortedRanges[i] = curr.add(prev, { adjacent: true });
            sortedRanges.splice(i - 1, 1);
        } else {
            i++;
        }
    }
    return sortedRanges;
}

function excludeLunchTime(rangesArray, lunchTime) {
    var lunchRange = moment.range(moment(date + lunchTime.start), moment(date + lunchTime.end));
    var rangeWithoutLunchTime = [];
    rangesArray.forEach(function(range) {
        if (lunchRange.overlaps(range)) {
            var overlappingRange = lunchRange.intersect(range);
            var newRange = range.subtract(overlappingRange);
            newRange.forEach(function(r) {
                rangeWithoutLunchTime.push(r);
            })
        } else {
            rangeWithoutLunchTime.push(range)
        }
    })
    return rangeWithoutLunchTime;
}

function capitalize(text) {
    return text.charAt(0).toUpperCase() + text.slice(1).toLowerCase();
}

$('.cal-btn').on('click', function(e) {
    e.preventDefault()
    $('.appointmentstable tbody').empty();

    var hasErrors = antiClockwiseTimeError();

    if (hasErrors) {
        alert('Please resolve the errors first')
        return;
    }

    buildAppointments()

    var html = '';

    finalAppointments.forEach(function(item) {
        html += '<tr><td>' + capitalize(item.day) + '</td><td>' + item.start_from + '</td><td>' + item.end_at + '</td></tr>'
    })
    $(this).text('Recalculate Appointments')
    $('.appointmentstable tbody').append(html);
})

$('#is_patient_minor').on('change', function() {
    $('.showIfMinor input').val('')
    $('.showIfMinor').toggleClass('d-none')
})

$('.dobpicker').datepicker({
    language: 'en',
    dateFormat: 'yyyy/mm/dd',
    maxDate: new Date(),
});

$('.todayDatePicker').datepicker({
    language: 'en',
    dateFormat: 'yyyy/mm/dd',
    maxDate: new Date(),
});



$('.expand-collapse').on('click', function(e) {
    e.preventDefault();
    $('.appointmentstable').toggleClass('d-none')
})


function antiClockwiseTimeError() {
    var hasErrors = false
    var parent = $('.interval-time');

    $errorDiv = $('<div>')
    $errorDiv.addClass('mt-2 alert alert-danger anti-clockwise-time-error');
    $errorDiv.text('End time can\'t be less than start time.');

    $('.anti-clockwise-time-error').remove();
    parent.each(function(i, item) {
        var start_time = $(item).find('.start_time').val();
        var end_time = $(item).find('.end_time').val();


        var start_time_moment = moment(date + start_time, f);
        var end_time_moment = moment(date + end_time, f);

        if (!start_time_moment.isBefore(end_time_moment)) {
            item.append($errorDiv[0]);
            hasErrors = true;
        }
    })

    var start_time = $('.lunch_time_start').val();
    var end_time = $('.lunch_time_end').val();

    if (start_time !== '' && end_time !== '') {
        var start_time_moment = moment(date + start_time, f);
        var end_time_moment = moment(date + end_time, f);
        if (!start_time_moment.isBefore(end_time_moment)) {
            $('.lunch_time_start').closest('.form-group').append($errorDiv[0]);
            hasErrors = true;
        }
    }



    return hasErrors;
}

$(document).on('click', '.my-timepicker-div .ampm-button', function(e) {
    e.preventDefault()
})

if ($('.qcm-form').length && $('.time_zone').val() !== '') {
    $('.timezonePicker').val($('#time_zone').val()).trigger('change')
}

$('.toggle-password .input-group-append').on('click', function() {
    var parent = $(this).closest('.toggle-password');
    var input = parent.find('input');
    var type = input.attr('type');
    if (type == "password") {
        type = 'text'
    } else {
        type = 'password'
    }
    input.attr('type', type);
    parent.find('.input-group-text i').toggleClass('fa-eye-slash fa-eye')
})

$('.custom-tp').each(function(i, tpContainer) {
    customDatePicker(tpContainer);
})

function customDatePicker(tpContainer) {
    var container = $(tpContainer);
    var inputVal = $(tpContainer).find('input').val();
    inputVal = inputVal !== '' ? inputVal : '12:00 PM';
    var actualTime = moment('2020-05-20 ' + inputVal);
    var hour = parseInt(actualTime.format('hh'));
    var minute = parseInt(actualTime.format('mm'));
    var ampm = actualTime.format('A');

    container.find('input').on('focus', function() {
        $('.custom-tp').addClass('hidden')
        container.removeClass('hidden');
        $('*').on('click.datepickerclose', function(e) {
            // e.stopPropagation();
            if ($(e.target).is('.custom-tp *')) return;
            container.addClass('hidden');
            $('*').off('click.datepickerclose')
        })
    })

    function setValues(shouldCheckPrevValue) {
        if (container.find('input').val() == '' && shouldCheckPrevValue) return
        container.find('input').val(hour.toString().padStart(2, 0) + ':' + minute.toString().padStart(2, 0) + ' ' + ampm);
        container.find('.hour p').text(hour.toString().padStart(2, 0));
        container.find('.minute p').text(minute.toString().padStart(2, 0));
        container.find('.ampm p').text(ampm);
    }

    setValues(true);


    container.find('.incrementt,.decrementt').on('click', incrementDecrement)
    container.find('.toggleampm').on('click', toggleAmPm)

    var interval;
    container.find('.incrementt,.decrementt').on('mousedown', function(e) {
        clearTimeout(this.downTimer);
        this.downTimer = setTimeout(function() {
            interval = setInterval(function() {
                incrementDecrement(e)
            }, 50)
        }, 700);
    }).mouseup(function(e) {
        clearTimeout(this.downTimer);
        clearInterval(interval)
    });

    function toggleAmPm(e) {
        var _ampm = $(e.target).closest('.tp-control').find('p').text() == 'AM' ? 'PM' : 'AM';
        ampm = _ampm;
        setValues(false);
    }

    function incrementDecrement(e) {
        var type = $(e.target).closest('.tp-control').hasClass('hour') ? 'hour' : 'minute';
        var operation = $(e.target).hasClass('incrementt') ? 'add' : 'substract';
        var newVal;
        if (type == 'hour') {
            if (operation == 'add') {
                if (hour < 12) {
                    newVal = hour + 1;
                } else {
                    newVal = 1;
                }
            } else {
                if (hour > 1) {
                    newVal = hour - 1;
                } else {
                    newVal = 12;
                }
            }
            hour = newVal;
        } else {
            if (operation == 'add') {
                if (minute < 59) {
                    newVal = minute + 1;
                } else {
                    newVal = 0;
                }
            } else {
                if (minute > 0) {
                    newVal = minute - 1;
                } else {
                    newVal = 59;
                }
            }
            minute = newVal;
        }
        setValues(false);
    }
}
$('.timeEntry').timeEntry({
    ampmPrefix: ' '
});