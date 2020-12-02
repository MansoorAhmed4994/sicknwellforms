<?php include('header.php') ?>
<main class="flex-1 d-flex">
    <?php include('sidebar.php') ?>
    <div class="main-content flex-1 d-flex flex-column">
        <h2 class="main-heading">Add Client</h2>
        <div class="flex-1">
            <div class="scrollbar-fancy h-100">
                <div class="form-type-1">
                    <form action="clients.php">
                        <div class="container-fluid">
                            <div class="row form-group align-items-center">
                                <div class="col-12 col-md-4 col-lg-2">
                                    <label>Full Name</label>
                                </div>
                                <div class="col-12 col-md-8 col-lg-10">
                                    <input type="text" class="form-control custominput" placeholder="Type here" />
                                </div>
                            </div>
                            <div class="row form-group align-items-center">
                                <div class="col-12 col-md-4 col-lg-2">
                                    <label>Company Name</label>
                                </div>
                                <div class="col-12 col-md-8 col-lg-10">
                                    <input type="text" class="form-control custominput" placeholder="Type here" />
                                </div>
                            </div>
                            <div class="row form-group align-items-center">
                                <div class="col-12 col-md-4 col-lg-2">
                                    <label>Job Title</label>
                                </div>
                                <div class="col-12 col-md-8 col-lg-10">
                                    <select class="form-control custominput">
                                        <option value="">Select</option>
                                        <option value="Vice President / Assistant Vice President">Vice
                                            President / Assistant Vice President</option>
                                        <option value="CFO / Treasurer / Controller">CFO / Treasurer /
                                            Controller</option>
                                        <option value="Director / Assistant Director / Department Head">Director / Assistant Director / Department Head</option>
                                        <option value="Manager / Assistant Manager">Manager / Assistant
                                            Manager</option>
                                        <option value="Professional (salaried)">Professional (salaried)</option>
                                        <option value="Technical (hourly)">Technical (hourly)</option>
                                        <option value="Small Business Owner">Small Business Owner</option>
                                        <option value="Doctor / Physician">Doctor / Physician</option>
                                        <option value="Developer / Programmer">Developer / Programmer</option>
                                        <option value="Lawyer">Lawyer</option>
                                        <option value="Sales Representative">Sales Representative</option>
                                        <option value="Marketing / Communications">Marketing /
                                            Communications</option>
                                        <option value="Customer Service">Customer Service</option>
                                        <option value="Human Resources">Human Resources</option>
                                        <option value="Educator">Educator</option>
                                        <option value="Clerical / Administrative Support">Clerical /
                                            Administrative Support</option>
                                        <option value="Dont work">Don't work</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group align-items-center">
                                <div class="col-12 col-md-4 col-lg-2">
                                    <label>Industry</label>
                                </div>
                                <div class="col-12 col-md-8 col-lg-10">
                                    <select class="form-control custominput">
                                        <option value="">Select</option>
                                        <option value="Accommodation">Accommodation</option>
                                        <option value="Apartment Management">Apartment Management</option>
                                        <option value="Bed &amp; Breakfast">Bed &amp; Breakfast</option>
                                        <option value="Boutiques &amp; Lodges">Boutiques &amp; Lodges</option>
                                        <option value="Camping Areas">Camping Areas</option>
                                        <option value="Cruise Lines">Cruise Lines</option>
                                        <option value="Elderly Apartments Management">Elderly Apartments Management</option>
                                        <option value="Elderly Homes Management">Elderly Homes Management</option>
                                        <option value="Hostels">Hostels</option>
                                        <option value="Hotels">Hotels</option>
                                        <option value="Luxury Lodges">Luxury Lodges</option>
                                        <option value="Motels">Motels</option>
                                        <option value="Resorts">Resorts</option>
                                        <option value="Student Dormitories &amp; Apartments">Student Dormitories &amp; Apartments</option>
                                        <option value="Agriculture, Farm Animals &amp; Forestry">Agriculture, Farm Animals &amp; Forestry</option>
                                        <option value="Aquaculture and Products">Aquaculture and Products</option>
                                        <option value="Cattle-Raising">Cattle-Raising</option>
                                        <option value="Crop Production">Crop Production</option>
                                        <option value="Farm Animals and Products">Farm Animals and Products</option>
                                        <option value="Farming">Farming</option>
                                        <option value="Forest Products">Forest Products</option>
                                        <option value="Forestry">Forestry</option>
                                        <option value="Livestock Raising">Livestock Raising</option>
                                        <option value="Logging">Logging</option>
                                        <option value="Paper Products">Paper Products</option>
                                        <option value="Poultry and Products">Poultry and Products</option>
                                        <option value="Support Activities for Agriculture and Forestry">Support Activities for Agriculture and Forestry</option>
                                        <option value="Animal Care &amp; Products for Animals">Animal Care &amp; Products for Animals</option>
                                        <option value="Animal Accessories Manufacturers">Animal Accessories Manufacturers</option>
                                        <option value="Animal Breeding Companies">Animal Breeding Companies</option>
                                        <option value="Animal Food Manufacturers">Animal Food Manufacturers</option>
                                        <option value="Pet Beauty Shops">Pet Beauty Shops</option>
                                        <option value="Pet Hotels">Pet Hotels</option>
                                        <option value="Pet Shelters / Rescue">Pet Shelters / Rescue</option>
                                        <option value="Pet Sitting">Pet Sitting</option>
                                        <option value="Pet Society">Pet Society</option>
                                        <option value="Pet Stores">Pet Stores</option>
                                        <option value="Pet Training Centers">Pet Training Centers</option>
                                        <option value="Veterinary Offices">Veterinary Offices</option>
                                        <option value="Arts &amp; Design">Arts &amp; Design</option>
                                        <option value="Body Arts">Body Arts</option>
                                        <option value="Conceptual Arts">Conceptual Arts</option>
                                        <option value="Design">Design</option>
                                        <option value="Fashion Design">Fashion Design</option>
                                        <option value="Fine Arts">Fine Arts</option>
                                        <option value="Graphic Design">Graphic Design</option>
                                        <option value="Hobby &amp; Musical Instrument Stores">Hobby &amp; Musical Instrument Stores</option>
                                        <option value="Industrial Design">Industrial Design</option>
                                        <option value="Literature">Literature</option>
                                        <option value="Music">Music</option>
                                        <option value="Painting">Painting</option>
                                        <option value="Performing Arts">Performing Arts</option>
                                        <option value="Sculpture">Sculpture</option>
                                        <option value="UI &amp; UX Design">UI &amp; UX Design</option>
                                        <option value="Visual Arts">Visual Arts</option>
                                        <option value="Web Design">Web Design</option>
                                        <option value="Automotive">Automotive</option>
                                        <option value="Automobile Manufacturers">Automobile Manufacturers</option>
                                        <option value="Auto Parts &amp; Equipment">Auto Parts &amp; Equipment</option>
                                        <option value="Car Wash and Detailing">Car Wash and Detailing</option>
                                        <option value="Motorcycle Manufacturers">Motorcycle Manufacturers</option>
                                        <option value="Motor Vehicle &amp; Parts Dealers">Motor Vehicle &amp; Parts Dealers</option>
                                        <option value="Motor Vehicle Repair Services">Motor Vehicle Repair Services</option>
                                        <option value="Tires &amp; Rubber">Tires &amp; Rubber</option>
                                        <option value="Beauty &amp; Personal Care">Beauty &amp; Personal Care</option>
                                        <option value="Barbers">Barbers</option>
                                        <option value="Beauty Centers">Beauty Centers</option>
                                        <option value="Cosmetics Shops">Cosmetics Shops</option>
                                        <option value="Hairdressers">Hairdressers</option>
                                        <option value="Hair Removal">Hair Removal</option>
                                        <option value="Manicure and Pedicure">Manicure and Pedicure</option>
                                        <option value="Massage Centers">Massage Centers</option>
                                        <option value="Perfume Stores">Perfume Stores</option>
                                        <option value="Spa Centers">Spa Centers</option>
                                        <option value="Tanning Saloons">Tanning Saloons</option>
                                        <option value="Tattoo Stores">Tattoo Stores</option>
                                        <option value="Weight Loss Centers">Weight Loss Centers</option>
                                        <option value="Wigs and Weaves Stores">Wigs and Weaves Stores</option>
                                        <option value="Broadcasting">Broadcasting</option>
                                        <option value="Cable Television">Cable Television</option>
                                        <option value="Digital Satellite Television">Digital Satellite Television</option>
                                        <option value="Internet Media">Internet Media</option>
                                        <option value="IPTV &amp; Web TV">IPTV &amp; Web TV</option>
                                        <option value="Radio">Radio</option>
                                        <option value="Television">Television</option>
                                        <option value="Construction">Construction</option>
                                        <option value="Building Material and Garden Equipment and Supplies Dealers">Building Material and Garden Equipment and Supplies Dealers</option>
                                        <option value="Construction Materials">Construction Materials</option>
                                        <option value="Construction of Buildings">Construction of Buildings</option>
                                        <option value="Heavy and Civil Engineering Construction">Heavy and Civil Engineering Construction</option>
                                        <option value="Specialty Trade Contractors">Specialty Trade Contractors</option>
                                        <option value="Consulting">Consulting</option>
                                        <option value="IT Consulting">IT Consulting</option>
                                        <option value="Research Consulting">Research Consulting</option>
                                        <option value="E-Commerce &amp; Social Networks">E-Commerce &amp; Social Networks</option>
                                        <option value="Academic Networks (Academia etc)">Academic Networks (Academia etc)</option>
                                        <option value="Business to Administration (B2A)">Business to Administration (B2A)</option>
                                        <option value="Business to Business (B2B)">Business to Business (B2B)</option>
                                        <option value="Business to Consumer (B2C)">Business to Consumer (B2C)</option>
                                        <option value="Consumer to Administration (C2A)">Consumer to Administration (C2A)</option>
                                        <option value="Consumer to Business (C2B)">Consumer to Business (C2B)</option>
                                        <option value="Consumer to Consumer (C2C)">Consumer to Consumer (C2C)</option>
                                        <option value="Educational Networks">Educational Networks</option>
                                        <option value="Hobby Networks">Hobby Networks</option>
                                        <option value="Informational Networks (Do It Yourself Community etc.)">Informational Networks (Do It Yourself Community etc.)</option>
                                        <option value="Microblogging Networks (Twitter, Tumblr etc.)">Microblogging Networks (Twitter, Tumblr etc.)</option>
                                        <option value="Multimedia Sharing Networks (Youtube etc)">Multimedia Sharing Networks (Youtube etc)</option>
                                        <option value="Communities">Communities</option>
                                        <option value="Professional Networks (LinkedIn etc.)">Professional Networks (LinkedIn etc.)</option>
                                        <option value="Social Connections (Facebook etc.)">Social Connections (Facebook etc.)</option>
                                        <option value="Education">Education</option>
                                        <option value="Camps">Camps</option>
                                        <option value="Colleges &amp; Universities">Colleges &amp; Universities</option>
                                        <option value="Diversified Courses">Diversified Courses</option>
                                        <option value="Elementary &amp; Secondary Schools">Elementary &amp; Secondary Schools</option>
                                        <option value="High Schools, Technical &amp; Trade Schools">High Schools, Technical &amp; Trade Schools</option>
                                        <option value="Libraries &amp; Museums">Libraries &amp; Museums</option>
                                        <option value="Engineering &amp; Architecture">Engineering &amp; Architecture</option>
                                        <option value="Administrative Engineering">Administrative Engineering</option>
                                        <option value="Agricultural Engineering">Agricultural Engineering</option>
                                        <option value="Architecture">Architecture</option>
                                        <option value="Architecture &amp; Recreation">Architecture &amp; Recreation</option>
                                        <option value="Civil Engineering">Civil Engineering</option>
                                        <option value="Computer Engineering">Computer Engineering</option>
                                        <option value="Construction Engineering">Construction Engineering</option>
                                        <option value="Design Engineering">Design Engineering</option>
                                        <option value="Electrical Engineering">Electrical Engineering</option>
                                        <option value="Environmental Engineering">Environmental Engineering</option>
                                        <option value="Genetic Engineering">Genetic Engineering</option>
                                        <option value="Geological Engineering">Geological Engineering</option>
                                        <option value="Industrial Engineering">Industrial Engineering</option>
                                        <option value="Interior Architecture">Interior Architecture</option>
                                        <option value="Landscape Architecture">Landscape Architecture</option>
                                        <option value="Mechanical Engineering">Mechanical Engineering</option>
                                        <option value="Production Engineering">Production Engineering</option>
                                        <option value="Quality Engineering">Quality Engineering</option>
                                        <option value="Systems Engineering">Systems Engineering</option>
                                        <option value="Entertainment &amp; Recreation">Entertainment &amp; Recreation</option>
                                        <option value="Amusement Parks">Amusement Parks</option>
                                        <option value="Casinos">Casinos</option>
                                        <option value="Cinemas">Cinemas</option>
                                        <option value="Circus">Circus</option>
                                        <option value="Gaming">Gaming</option>
                                        <option value="Museums, Historical Sites, and Similar Institutions">Museums, Historical Sites, and Similar Institutions</option>
                                        <option value="Nightclubs &amp; Disco's">Nightclubs &amp; Disco's</option>
                                        <option value="Outdoor Recreation">Outdoor Recreation</option>
                                        <option value="Recreation Industries">Recreation Industries</option>
                                        <option value="Theatres">Theatres</option>
                                        <option value="Water Parks">Water Parks</option>
                                        <option value="Event Organization">Event Organization</option>
                                        <option value="Bar Mitzvah Organizations">Bar Mitzvah Organizations</option>
                                        <option value="Birthday Party Organizations">Birthday Party Organizations</option>
                                        <option value="Catering">Catering</option>
                                        <option value="Party Organizations">Party Organizations</option>
                                        <option value="Seminar and Conference Organizations">Seminar and Conference Organizations</option>
                                        <option value="Tour Organizations">Tour Organizations</option>
                                        <option value="Training Organizations">Training Organizations</option>
                                        <option value="Travel Organizations">Travel Organizations</option>
                                        <option value="Venue Management">Venue Management</option>
                                        <option value="VIP Events Organization">VIP Events Organization</option>
                                        <option value="Wedding &amp; Engagement Party Organizations">Wedding &amp; Engagement Party Organizations</option>
                                        <option value="Fashion">Fashion</option>
                                        <option value="Accessories">Accessories</option>
                                        <option value="Bridal Wear">Bridal Wear</option>
                                        <option value="Clothing and Clothing Accessories Stores">Clothing and Clothing Accessories Stores</option>
                                        <option value="Footwear">Footwear</option>
                                        <option value="Formal Suits and Night Dresses">Formal Suits and Night Dresses</option>
                                        <option value="Haute Couture">Haute Couture</option>
                                        <option value="Model Agency">Model Agency</option>
                                        <option value="Sportswear">Sportswear</option>
                                        <option value="Tailoring">Tailoring</option>
                                        <option value="Watches and Jewelry">Watches and Jewelry</option>
                                        <option value="Wholesale">Wholesale</option>
                                        <option value="Finance">Finance</option>
                                        <option value="Accounting">Accounting</option>
                                        <option value="Asset Management &amp; Custody Banks">Asset Management &amp; Custody Banks</option>
                                        <option value="Consumer Finance">Consumer Finance</option>
                                        <option value="Diversified Banks">Diversified Banks</option>
                                        <option value="Diversified Capital Markets">Diversified Capital Markets</option>
                                        <option value="Financial Exchanges &amp; Data">Financial Exchanges &amp; Data</option>
                                        <option value="Financial Technologies">Financial Technologies</option>
                                        <option value="Investment Banking &amp; Brokerage">Investment Banking &amp; Brokerage</option>
                                        <option value="Mortgage REITs">Mortgage REITs</option>
                                        <option value="Multi-Sector Holdings">Multi-Sector Holdings</option>
                                        <option value="Other Diversified Financial Services">Other Diversified Financial Services</option>
                                        <option value="Regional Banks">Regional Banks</option>
                                        <option value="Specialized Finance">Specialized Finance</option>
                                        <option value="Thrifts &amp; Mortgage Finance">Thrifts &amp; Mortgage Finance</option>
                                        <option value="Fishing &amp; Hunting">Fishing &amp; Hunting</option>
                                        <option value="Fishing">Fishing</option>
                                        <option value="Fishing, Hunting, Trapping Products">Fishing, Hunting, Trapping Products</option>
                                        <option value="Hunting">Hunting</option>
                                        <option value="Trapping">Trapping</option>
                                        <option value="Food &amp; Beverages">Food &amp; Beverages</option>
                                        <option value="Beverage Producers">Beverage Producers</option>
                                        <option value="Bistro">Bistro</option>
                                        <option value="Cafeteria">Cafeteria</option>
                                        <option value="Coffee Shop">Coffee Shop</option>
                                        <option value="Food and Beverage Stores">Food and Beverage Stores</option>
                                        <option value="Food Distributors">Food Distributors</option>
                                        <option value="Market Place">Market Place</option>
                                        <option value="Packaged Foods &amp; Meats">Packaged Foods &amp; Meats</option>
                                        <option value="Restaurant">Restaurant</option>
                                        <option value="Health Care and Social Assistance">Health Care and Social Assistance</option>
                                        <option value="Ambulatory Health Care">Ambulatory Health Care</option>
                                        <option value="Biotechnology">Biotechnology</option>
                                        <option value="Dental Care">Dental Care</option>
                                        <option value="Health and Personal Care Stores">Health and Personal Care Stores</option>
                                        <option value="Health Care Distributors">Health Care Distributors</option>
                                        <option value="Health Care Equipment">Health Care Equipment</option>
                                        <option value="Health Care Facilities">Health Care Facilities</option>
                                        <option value="Health Care">Health Care</option>
                                        <option value="Health Care Supplies">Health Care Supplies</option>
                                        <option value="Health Care Technology">Health Care Technology</option>
                                        <option value="Hospitals">Hospitals</option>
                                        <option value="Life Sciences Tools &amp; Services">Life Sciences Tools &amp; Services</option>
                                        <option value="Managed Health Care">Managed Health Care</option>
                                        <option value="Medical Supplies">Medical Supplies</option>
                                        <option value="Nursing and Residential Care Facilities">Nursing and Residential Care Facilities</option>
                                        <option value="Pharmaceuticals">Pharmaceuticals</option>
                                        <option value="Social Assistance">Social Assistance</option>
                                        <option value="Home Care &amp; Home Services">Home Care &amp; Home Services</option>
                                        <option value="Babysitter">Babysitter</option>
                                        <option value="Dry Cleaning &amp; Laundry">Dry Cleaning &amp; Laundry</option>
                                        <option value="Elderly Care at Home Services">Elderly Care at Home Services</option>
                                        <option value="Gardening">Gardening</option>
                                        <option value="Home Making">Home Making</option>
                                        <option value="Home Security Services">Home Security Services</option>
                                        <option value="House Cleaning">House Cleaning</option>
                                        <option value="Housekeeping">Housekeeping</option>
                                        <option value="Professional Cleaning Services">Professional Cleaning Services</option>
                                        <option value="Repairing Services">Repairing Services</option>
                                        <option value="Human Resources">Human Resources</option>
                                        <option value="Coaching">Coaching</option>
                                        <option value="Head Hunter">Head Hunter</option>
                                        <option value="Human Resources Training">Human Resources Training</option>
                                        <option value="Performance Management">Performance Management</option>
                                        <option value="Recruiting">Recruiting</option>
                                        <option value="Information Technology">Information Technology</option>
                                        <option value="Application Software">Application Software</option>
                                        <option value="Communications Equipment">Communications Equipment</option>
                                        <option value="Data Processing, Hosting, and Related Services">Data Processing, Hosting, and Related Services</option>
                                        <option value="Data Processing &amp; Outsourced Services">Data Processing &amp; Outsourced Services</option>
                                        <option value="Electronics and Appliance Stores">Electronics and Appliance Stores</option>
                                        <option value="Electronics and Appliance Warranty and Repair Services">Electronics and Appliance Warranty and Repair Services</option>
                                        <option value="Electronic Components">Electronic Components</option>
                                        <option value="Electronic Equipment &amp; Instruments">Electronic Equipment &amp; Instruments</option>
                                        <option value="Home Entertainment Software">Home Entertainment Software</option>
                                        <option value="Internet Services &amp; Infrastructure">Internet Services &amp; Infrastructure</option>
                                        <option value="IT Consulting &amp; Other Services">IT Consulting &amp; Other Services</option>
                                        <option value="Mobile Technologies">Mobile Technologies</option>
                                        <option value="Mobile Games Companies">Mobile Games Companies</option>
                                        <option value="Search Engine Optimization">Search Engine Optimization</option>
                                        <option value="Semiconductors">Semiconductors</option>
                                        <option value="Semiconductor Equipment">Semiconductor Equipment</option>
                                        <option value="Software">Software</option>
                                        <option value="Technology Distributors">Technology Distributors</option>
                                        <option value="Technology Hardware, Storage &amp; Peripherals">Technology Hardware, Storage &amp; Peripherals</option>
                                        <option value="Video Games Companies">Video Games Companies</option>
                                        <option value="Insurance">Insurance</option>
                                        <option value="Insurance Brokers">Insurance Brokers</option>
                                        <option value="Life &amp; Health Insurance">Life &amp; Health Insurance</option>
                                        <option value="Multi-line Insurance">Multi-line Insurance</option>
                                        <option value="Property &amp; Casualty Insurance">Property &amp; Casualty Insurance</option>
                                        <option value="Reinsurance">Reinsurance</option>
                                        <option value="Legal">Legal</option>
                                        <option value="Banking and Finance Law">Banking and Finance Law</option>
                                        <option value="Commercial Law">Commercial Law</option>
                                        <option value="Corporate Law">Corporate Law</option>
                                        <option value="Court Houses">Court Houses</option>
                                        <option value="Court Support">Court Support</option>
                                        <option value="Criminal Law">Criminal Law</option>
                                        <option value="Family Law">Family Law</option>
                                        <option value="Media Law">Media Law</option>
                                        <option value="Public Law">Public Law</option>
                                        <option value="Manufacturing">Manufacturing</option>
                                        <option value="Aerospace &amp; Defense">Aerospace &amp; Defense</option>
                                        <option value="Apparel Manufacturing">Apparel Manufacturing</option>
                                        <option value="Beverage and Tobacco Product Manufacturing">Beverage and Tobacco Product Manufacturing</option>
                                        <option value="Chemical Manufacturing">Chemical Manufacturing</option>
                                        <option value="Computer and Electronic Product Manufacturing">Computer and Electronic Product Manufacturing</option>
                                        <option value="Electrical Equipment, Appliance, and Component Manufacturing">Electrical Equipment, Appliance, and Component Manufacturing</option>
                                        <option value="Fabricated Metal Product Manufacturing">Fabricated Metal Product Manufacturing</option>
                                        <option value="Food Manufacturing">Food Manufacturing</option>
                                        <option value="Furniture and Related Product Manufacturing">Furniture and Related Product Manufacturing</option>
                                        <option value="Leather and Allied Product Manufacturing">Leather and Allied Product Manufacturing</option>
                                        <option value="Machinery Manufacturing">Machinery Manufacturing</option>
                                        <option value="Miscellaneous Manufacturing">Miscellaneous Manufacturing</option>
                                        <option value="Nonmetallic Mineral Product Manufacturing">Nonmetallic Mineral Product Manufacturing</option>
                                        <option value="Paper Manufacturing">Paper Manufacturing</option>
                                        <option value="Petroleum and Coal Products Manufacturing">Petroleum and Coal Products Manufacturing</option>
                                        <option value="Plastics and Rubber Products Manufacturing">Plastics and Rubber Products Manufacturing</option>
                                        <option value="Primary Metal Manufacturing">Primary Metal Manufacturing</option>
                                        <option value="Printing and Related Support Activities">Printing and Related Support Activities</option>
                                        <option value="Textile Mills">Textile Mills</option>
                                        <option value="Textile Product Mills">Textile Product Mills</option>
                                        <option value="Transportation Equipment Manufacturing">Transportation Equipment Manufacturing</option>
                                        <option value="Wood Product Manufacturing">Wood Product Manufacturing</option>
                                        <option value="Mining &amp; Quarrying">Mining &amp; Quarrying</option>
                                        <option value="Diversified Metals &amp; Mining">Diversified Metals &amp; Mining</option>
                                        <option value="Mining (except Oil and Gas)">Mining (except Oil and Gas)</option>
                                        <option value="Precious Metals &amp; Minerals">Precious Metals &amp; Minerals</option>
                                        <option value="Quarrying">Quarrying</option>
                                        <option value="Support Activities for Mining">Support Activities for Mining</option>
                                        <option value="Non-Profit Organizations">Non-Profit Organizations</option>
                                        <option value="Advocacy Organizations">Advocacy Organizations</option>
                                        <option value="Associations">Associations</option>
                                        <option value="Charitable Organizations">Charitable Organizations</option>
                                        <option value="Communities">Communities</option>
                                        <option value="Foundations">Foundations</option>
                                        <option value="Labor Unions">Labor Unions</option>
                                        <option value="Professional Associations">Professional Associations</option>
                                        <option value="Religious Organizations">Religious Organizations</option>
                                        <option value="Social Organizations">Social Organizations</option>
                                        <option value="Oil, Gas &amp; Consumable Fuels">Oil, Gas &amp; Consumable Fuels</option>
                                        <option value="Coal Products &amp; Marketing">Coal Products &amp; Marketing</option>
                                        <option value="Gasoline Stations">Gasoline Stations</option>
                                        <option value="Oil &amp; Gas Drilling">Oil &amp; Gas Drilling</option>
                                        <option value="Oil &amp; Gas Equipment &amp; Services">Oil &amp; Gas Equipment &amp; Services</option>
                                        <option value="Oil &amp; Gas Refining &amp; Marketing">Oil &amp; Gas Refining &amp; Marketing</option>
                                        <option value="Oil &amp; Gas Storage &amp; Transportation">Oil &amp; Gas Storage &amp; Transportation</option>
                                        <option value="Oil &amp; Gas Exploration &amp; Production">Oil &amp; Gas Exploration &amp; Production</option>
                                        <option value="Other Consumable Fuels">Other Consumable Fuels</option>
                                        <option value="Professional, Scientific, &amp; Technical Services">Professional, Scientific, &amp; Technical Services</option>
                                        <option value="Professional Services">Professional Services</option>
                                        <option value="Scientific Services">Scientific Services</option>
                                        <option value="Technical Services">Technical Services</option>
                                        <option value="Public Administration">Public Administration</option>
                                        <option value="Administration of Economic Programs">Administration of Economic Programs</option>
                                        <option value="Administration of Environmental Quality Programs">Administration of Environmental Quality Programs</option>
                                        <option value="Administration of Housing Programs, Urban Planning, and Community Development">Administration of Housing Programs, Urban Planning, and Community Development</option>
                                        <option value="Administration of Human Resource Programs">Administration of Human Resource Programs</option>
                                        <option value="Executive, Legislative, and Other General Government Support">Executive, Legislative, and Other General Government Support</option>
                                        <option value="Fire Departments">Fire Departments</option>
                                        <option value="Justice, Public Order, and Safety Activities">Justice, Public Order, and Safety Activities</option>
                                        <option value="Law Enforcement">Law Enforcement</option>
                                        <option value="Military">Military</option>
                                        <option value="National Security and International Affairs">National Security and International Affairs</option>
                                        <option value="Politics">Politics</option>
                                        <option value="Space Research and Technology">Space Research and Technology</option>
                                        <option value="Public Relations &amp; Advertising">Public Relations &amp; Advertising</option>
                                        <option value="Community Relations">Community Relations</option>
                                        <option value="Crisis Management">Crisis Management</option>
                                        <option value="Direct Advertising">Direct Advertising</option>
                                        <option value="Employee Relations">Employee Relations</option>
                                        <option value="Hardcopy Advertising">Hardcopy Advertising</option>
                                        <option value="Media Advertising">Media Advertising</option>
                                        <option value="Media Relations">Media Relations</option>
                                        <option value="Online Ads Advertising">Online Ads Advertising</option>
                                        <option value="Public Affairs">Public Affairs</option>
                                        <option value="Social Media Management">Social Media Management</option>
                                        <option value="Sponsorship Advertising">Sponsorship Advertising</option>
                                        <option value="Publishing">Publishing</option>
                                        <option value="Book Stores">Book Stores</option>
                                        <option value="Directories">Directories</option>
                                        <option value="Electronic Publishing">Electronic Publishing</option>
                                        <option value="Magazines">Magazines</option>
                                        <option value="Newspapers">Newspapers</option>
                                        <option value="Printing Houses">Printing Houses</option>
                                        <option value="Publicists">Publicists</option>
                                        <option value="Various Press Activities">Various Press Activities</option>
                                        <option value="Real Estate &amp; Leasing">Real Estate &amp; Leasing</option>
                                        <option value="Diversified Real Estate Activities">Diversified Real Estate Activities</option>
                                        <option value="Lessors of Nonfinancial Intangible Assets">Lessors of Nonfinancial Intangible Assets</option>
                                        <option value="Real Estate">Real Estate</option>
                                        <option value="Real Estate Development">Real Estate Development</option>
                                        <option value="Real Estate Operating Companies">Real Estate Operating Companies</option>
                                        <option value="Real Estate Services">Real Estate Services</option>
                                        <option value="Rental and Leasing">Rental and Leasing</option>
                                        <option value="Religious, Grantmaking, Civic, Professional, and Similar Organizations">Religious, Grantmaking, Civic, Professional, and Similar Organizations</option>
                                        <option value="Civic Organizations">Civic Organizations</option>
                                        <option value="Grantmaking Organizations">Grantmaking Organizations</option>
                                        <option value="Professional Organizations">Professional Organizations</option>
                                        <option value="Religious Organizations">Religious Organizations</option>
                                        <option value="Research &amp; Marketing">Research &amp; Marketing</option>
                                        <option value="Brand Management">Brand Management</option>
                                        <option value="Cause Marketing">Cause Marketing</option>
                                        <option value="Content Analysis">Content Analysis</option>
                                        <option value="Database Marketing">Database Marketing</option>
                                        <option value="Digital Marketing">Digital Marketing</option>
                                        <option value="Direct Marketing">Direct Marketing</option>
                                        <option value="Field Research">Field Research</option>
                                        <option value="Guerrilla Marketing">Guerrilla Marketing</option>
                                        <option value="Inbound Marketing">Inbound Marketing</option>
                                        <option value="Market Research">Market Research</option>
                                        <option value="Network Marketing">Network Marketing</option>
                                        <option value="Online Research">Online Research</option>
                                        <option value="Product Research">Product Research</option>
                                        <option value="User Research">User Research</option>
                                        <option value="Retail Trade">Retail Trade</option>
                                        <option value="Apparel Retail">Apparel Retail</option>
                                        <option value="Department Stores">Department Stores</option>
                                        <option value="Distributors">Distributors</option>
                                        <option value="General Merchandise Stores">General Merchandise Stores</option>
                                        <option value="Homefurnishing Retail">Homefurnishing Retail</option>
                                        <option value="Home Improvement Retail">Home Improvement Retail</option>
                                        <option value="Miscellaneous Store Retailers">Miscellaneous Store Retailers</option>
                                        <option value="Nonstore Retailers">Nonstore Retailers</option>
                                        <option value="Specialty Stores">Specialty Stores</option>
                                        <option value="Sports &amp; Activities">Sports &amp; Activities</option>
                                        <option value="Fitness &amp; Training Centers">Fitness &amp; Training Centers</option>
                                        <option value="Motosports">Motosports</option>
                                        <option value="Spectator Sports">Spectator Sports</option>
                                        <option value="Sporting Goods &amp; Hobby Stores">Sporting Goods &amp; Hobby Stores</option>
                                        <option value="Sports Clubs">Sports Clubs</option>
                                        <option value="Sports Leagues">Sports Leagues</option>
                                        <option value="Sports Organizators">Sports Organizators</option>
                                        <option value="Water Sports">Water Sports</option>
                                        <option value="Winter Sports">Winter Sports</option>
                                        <option value="Telecommunications">Telecommunications</option>
                                        <option value="Alternative Carriers">Alternative Carriers</option>
                                        <option value="Computer Networks">Computer Networks</option>
                                        <option value="Integrated Telecommunication">Integrated Telecommunication</option>
                                        <option value="Telephone Networks">Telephone Networks</option>
                                        <option value="Wireless Telecommunication">Wireless Telecommunication</option>
                                        <option value="Transportation">Transportation</option>
                                        <option value="Air Freight &amp; Logistics">Air Freight &amp; Logistics</option>
                                        <option value="Airport Transportation">Airport Transportation</option>
                                        <option value="Air Transportation">Air Transportation</option>
                                        <option value="Highways &amp; Railtracks">Highways &amp; Railtracks</option>
                                        <option value="Marine Ports &amp; Services">Marine Ports &amp; Services</option>
                                        <option value="Pipeline Transportation">Pipeline Transportation</option>
                                        <option value="Rail Transportation">Rail Transportation</option>
                                        <option value="Support Activities for Transportation">Support Activities for Transportation</option>
                                        <option value="Truck Transportation">Truck Transportation</option>
                                        <option value="Water Transportation">Water Transportation</option>
                                        <option value="Travel">Travel</option>
                                        <option value="Air Travel Companies">Air Travel Companies</option>
                                        <option value="Caravan/RV Travel Companies">Caravan/RV Travel Companies</option>
                                        <option value="Cruise Travel Companies">Cruise Travel Companies</option>
                                        <option value="Ground Travel Companies">Ground Travel Companies</option>
                                        <option value="Package Holiday Retailers">Package Holiday Retailers</option>
                                        <option value="Railway Travel Companies">Railway Travel Companies</option>
                                        <option value="Rental Car Companies">Rental Car Companies</option>
                                        <option value="Tour Companies">Tour Companies</option>
                                        <option value="Travel Agencies">Travel Agencies</option>
                                        <option value="Utilities">Utilities</option>
                                        <option value="Electric Utilities">Electric Utilities</option>
                                        <option value="Gas Utilities">Gas Utilities</option>
                                        <option value="Multi Utilities">Multi Utilities</option>
                                        <option value="Water Utilities">Water Utilities</option>
                                        <option value="Video &amp; Photography">Video &amp; Photography</option>
                                        <option value="Action and Sports Videos &amp; Photographs">Action and Sports Videos &amp; Photographs</option>
                                        <option value="Aerial Videos &amp; Photographs">Aerial Videos &amp; Photographs</option>
                                        <option value="Commercial Video Production">Commercial Video Production</option>
                                        <option value="Corporate Video Production">Corporate Video Production</option>
                                        <option value="Event Videos &amp; Photographs">Event Videos &amp; Photographs</option>
                                        <option value="Fashion Videos &amp; Photographs">Fashion Videos &amp; Photographs</option>
                                        <option value="Landscape Videos &amp; Photographs">Landscape Videos &amp; Photographs</option>
                                        <option value="Photojournalism">Photojournalism</option>
                                        <option value="Wildlife Videos &amp; Photographs">Wildlife Videos &amp; Photographs</option>
                                        <option value="Warehousing, Storage &amp; Delivery">Warehousing, Storage &amp; Delivery</option>
                                        <option value="Cargo">Cargo</option>
                                        <option value="Couriers and Messengers">Couriers and Messengers</option>
                                        <option value="Postal Service">Postal Service</option>
                                        <option value="Warehousing and Storage">Warehousing and Storage</option>
                                        <option value="Wholesale Trade">Wholesale Trade</option>
                                        <option value="Merchant Wholesalers, Durable Goods">Merchant Wholesalers, Durable Goods</option>
                                        <option value="Merchant Wholesalers, Nondurable Goods">Merchant Wholesalers, Nondurable Goods</option>
                                        <option value="Wholesale Electronic Markets and Agents and Brokers">Wholesale Electronic Markets and Agents and Brokers</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group align-items-center">
                                <div class="col-12 col-md-4 col-lg-2">
                                    <label>Username</label>
                                </div>
                                <div class="col-12 col-md-8 col-lg-10">
                                    <input type="text" class="form-control custominput" placeholder="Type here" />
                                </div>
                            </div>
                            <div class="row form-group align-items-center">
                                <div class="col-12 col-md-4 col-lg-2">
                                    <label>Email Address</label>
                                </div>
                                <div class="col-12 col-md-8 col-lg-10">
                                    <input type="email" class="form-control custominput" placeholder="Type here" />
                                </div>
                            </div>
                            <div class="row form-group align-items-center">
                                <div class="col-12 col-md-4 col-lg-2">
                                    <label>Password</label>
                                </div>
                                <div class="col-12 col-md-8 col-lg-10">
                                    <input type="password" class="form-control custominput" placeholder="Type here" />
                                </div>
                            </div>
                            <div class="row form-group align-items-center">
                                <div class="col-12 col-md-4 col-lg-2">
                                    <label>Confirm Password</label>
                                </div>
                                <div class="col-12 col-md-8 col-lg-10">
                                    <input type="password" class="form-control custominput" placeholder="Type here" />
                                </div>
                            </div>
                            <div class="row form-group align-items-center">
                                <div class="col-12 col-md-4 col-lg-2">
                                </div>
                                <div class="col-12 col-md-10">
                                    <input type="submit" value="Submit" />
                                </div>
                            </div>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</main>
<?php include('footer.php') ?>