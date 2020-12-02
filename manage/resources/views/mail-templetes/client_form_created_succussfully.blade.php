<html>

<head>
    <title></title>
</head>

<body style="background-color: #F0F2F4;">
    <table align="center" border="0" cellpadding="0" cellspacing="0" width="600">
        <tr align="center">
            <td style="padding: 20px 0;">
                <img alt="" src="{{ asset('public/images/sicknwell-images/logo.png')}}" width="180px" /></td>
        </tr>
    </table>
    <table align="center" border="0" cellpadding="0" cellspacing="0" style="background-color: rgb(255, 255, 255);"
        width="600">
        <tr align="center">
            <td
                style="padding:30px;text-align: left;font-family: helvetica,arial;font-size: 14px;line-height: 23px;color:#333">
                <table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="margin: 0;">
                    <tr>
                        <td style="line-height: 23px;color:#333;font-size: 14px;">
                            Dear {{$data['name']}},<br /><br />
                            Your Form has been Created succussfully.<br /><br />
                            <strong>ID:  {{$data['id']}}</strong><br/>
                            <strong>Pass: {{$data['password']}} </strong>
                            
                        </td>
                    </tr>

                </table> 
                
                <table align="left" border="0" cellpadding="0" cellspacing="0">
                    <tr align="left">
                        <td>
                            <table align="left" border="0" cellpadding="0" cellspacing="0">
                                <tr align="left">
                                    <td align="left">
                                        <table align="left" bgcolor="#ed1d24" border="0" cellpadding="0" cellspacing="0"
                                            style="display: inline-block; " valign="top">
                                            <tr align="center">
                                                <td align="center" style="padding: 15px 20px;">
                                                    <a href="{{route('client.login.form')}}"
                                                        style="font-size: 14px; font-family: Arial, Helvetica, sans-serif; color: rgb(255, 255, 255); text-decoration-line: none !important;"><strong
                                                            style="text-decoration:none;font-weight:normal;">For Login Click Here</strong></a>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>

                                </tr>
                            </table>
                        </td>
                    </tr>
                </table> 
                <table align="center" border="0" cellpadding="0" cellspacing="0" width="600"  style="margin: 0;">
                    <tr>
                        <td
                            style="border-bottom: 1px solid #ddd;padding-top: 10px;">
                        </td>
                    </tr>
                </table>
                <table align="center" border="0" cellpadding="0" cellspacing="0" width="600">
                    <tr align="left">
                        <td style="padding-right: 15px;">
                            <table align="left" border="0" cellpadding="0" cellspacing="0" width="600">
                                <tr align="center">
                                    <td align="left" style="line-height: 23px;color:#333;font-size: 14px;padding-top: 10px;" width="300">
                                        The SickNWell Team
                                    </td>
                                    <td align="right" style="line-height: 23px;color:#333;font-size: 14px;padding-top: 10px;" width="300">
                                        <strong>Phone</strong>: 877-837-5337
                                    </td>

                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>


        
    </table>
</body>

</html>