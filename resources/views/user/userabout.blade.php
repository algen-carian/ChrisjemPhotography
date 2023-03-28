<!DOCTYPE html> 
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>userdashboard</title>
	<link rel="icon" type="" href="../assets/style-lp/images/picxellence.png">
    <link rel="stylesheet" href="../assets/css/userabout.css">

   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"> <!-- for boxicons -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel = "stylesheet" href = " {{ URL::asset('assets/css/userdashboard.css'); }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body id = "boody">
    <div class="sidebar" style = "padding-left: 0;">
        <div class="logo-details">
            <i class='bx bxl-heart-square icon'></i>
            <div class="logo_name"><br><br><br>
            <img src="assets/picxellence.png" alt="ADMIN" width="100" height="100">
                <a href = "/" style = "text-decoration: none; color: #fff;">Picxellence</a>
            </div>
            <i class='bx bx-menu' id="btn"></i>
        </div>
        <br><br><br>
        <ul class="nav-list" style = "padding-left: 15px;">
          <!-- <li>
              <i class='bx bx-search' ></i>
             <input type="text" placeholder="Search...">
             <span class="tooltip">Search</span>
          </li> -->
            <li>
            <a href="userdashboard">
                <i class='bx bx-grid-alt'></i>
                <span class="links_name">Dashboard</span>
            </a>
                <span class="tooltip">Dashboard</span>
            </li>
            <li>
            <a href="userreservation">
                <i class='bx bxs-shopping-bag-alt'></i>

                <span class="links_name">Reservation</span>
            </a>
            <span class="tooltip">Reservation</span>
            </li>
            <li>
            <a href="userprofile">
                <i class='bx bx-user-circle' ></i>
                <span class="links_name">User Profile</span>
            </a>
            <span class="tooltip">User Profile</span>
            </li>
            <li>
                <a href="userabout">
                    <i class='bx bx-receipt' ></i>
                    <span class="links_name">About</span>
                </a>
                <span class="tooltip">About</span>
            </li>
            <li>
                <a href="userevent">
                    <i class='bx bx-calendar' ></i>
                    <span class="links_name">Event</span>
                </a>
                <span class="tooltip">Event</span>
            </li>
            <a href = "/">
                <li class="profile">
                    <!-- <div class="profile-details">
                    <img src="profile.jpg" alt="profileImg">
                    <div class="name_email">
                        <div class="name">User One</div>
                        <div class="email">userone@email.com</div>
                    </div>
                    </div> -->
                    <div class = "text_logout">Log-Out</div>
                    <i class='bx bx-log-out' id="log_out" ></i>
                </li>
            </a>
        </ul>
      </div>
     
      <body class="page page-id-15 page-template page-template-template-about-us page-template-template-about-us-php template-about-us">
<div id="pagebody">
        
    <header role="main" itemscope="" itemtype="http://schema.org/SiteNavigationElement" class="" style="background: rgba(255, 255, 255, 0);">
    	<div class="in">
	        <a href="https://www.underscore.co.uk/" class="logo">Home</a>
	        <nav class="menu-header-menu-container"><ul id="menu-header-menu" class="menu"><li id="menu-item-13644" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-15 current_page_item menu-item-13644"><a href="./About _ Underscore _ Branding, Design, Digital_files/About _ Underscore _ Branding, Design, Digital.html">About</a></li>
<li id="menu-item-8714" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8714"><a href="https://www.underscore.co.uk/our-work/">Work</a></li>
<li id="menu-item-8715" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8715"><a href="https://www.underscore.co.uk/services/">Services</a></li>
<li id="menu-item-13390" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-13390"><a href="https://www.underscore.co.uk/category/news/">News</a></li>
<li id="menu-item-8710" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8710"><a href="https://www.underscore.co.uk/contact-us/">Contact</a></li>
<li id="menu-item-11897" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-11897"><a href="mailto:hello@underscore.co.uk">hello@underscore.co.uk</a></li>
</ul></nav>    	</div>
    </header>
    
    <header role="mobile">

		<a class="menu" href="https://www.underscore.co.uk/about/#">
<!--
			<select onchange="location.href = this.value;">
				<option value="">MENU</option>
				 <option value="https://www.underscore.co.uk/about/">About</option><option value="https://www.underscore.co.uk/our-work/">Work</option><option value="https://www.underscore.co.uk/services/">Services</option><option value="https://www.underscore.co.uk/category/news/">News</option><option value="https://www.underscore.co.uk/contact-us/">Contact</option>			 </select>
-->			 
			<img class="burger" src="./About _ Underscore _ Branding, Design, Digital_files/menu.png">
		</a>
		
		<a href="tel:+442076318400" class="call">
			<span class="img"></span>
		</a>
		
		<a href="" class="search">
			<span class="img"></span>
		</a>
		
	     <a href="https://www.underscore.co.uk/" class="logo"></a>
	     
	     <div class="menu_open">
	     	<div class="center">
				 <a href="./About _ Underscore _ Branding, Design, Digital_files/About _ Underscore _ Branding, Design, Digital.html">About</a><a href="https://www.underscore.co.uk/our-work/">Work</a><a href="https://www.underscore.co.uk/services/">Services</a><a href="https://www.underscore.co.uk/category/news/">News</a><a href="https://www.underscore.co.uk/contact-us/">Contact</a>	     	</div>
	     </div>

    </header>



	
	
	
	<div class="contentslider slider" data-play="1">



	
					
			<div href="https://www.underscore.co.uk/our-work/purssells-london-2/" style="background-image: url(&#39;https://underscore.co.uk/assets/uploads/2014/09/Aboutpage_Banner1-1600x700.jpg&#39;); height:700px;" class="slide">

	
	
	<span class="center content-row">
		<div class="title" itemprop="name">dedicated and different</div>              
		        
        <div class="underscore_"></div>
		
							</span>
	<div class="homepage-see-more">
		<!--<div class="see-more-text">
		</div>
		<div class="see-more-line">
		</div>-->
	</div>
</div>

			
		
		
		
				
				
		


	

	



</div>

	
	<main itemscope="" itemtype="http://schema.org/AboutPage">
	
	
		
		
		<div class="content-row-wrap text last">
			<div class="content-row text">
				<div class="description"><span class="h_blue">Since 1999 our team of strategic thinkers, branding experts and innovation junkies has helped a diverse range of organisations by using a singular approach: we get underneath; we add weight; then we make a connection. </span>
<br><br>
<span class="h_highlight">Because that’s what an <u>underscore</u> does.</span>
</div>			</div>
		</div>

		
		



		
	</main>
	
	<aside class="team">

		<div class="grid clear">

			
				
				<span class="item loop1" itemscope="" itemtype="http://schema.org/Person">
					<span class="img lazy loaded" data-src="https://underscore.co.uk/assets/uploads/2014/09/Neil-600x454.jpg" data-bgimage="1" style="background-image: url(&quot;https://underscore.co.uk/assets/uploads/2014/09/Neil-600x454.jpg&quot;); background-size: cover;"></span>
					<span class="hover">
						<span class="center">
							<div class="name title" itemprop="name">Neil Stanhope</div>
							<div class="subtitle_underscore"> </div>
							<div class="job_position subtitle" itemprop="jobTitle">founder</div>
						</span>
					</span>
					<div class="team_description">
						<div class="close"> </div>
						<div class="team_name">Neil Stanhope</div>
						<div class="subtitle_underscore"> </div>
						<div class="team_quote">"the best is yet to come"</div>
						<div class="team_bio">Neil started underscore with a goal to create a more streamlined agency delivery process that could deliver quicker against client requirements. His role today is to ensure the underscore brand continues to grow and our team efforts exceed client expectations wherever possible.
 
Key clients have included Alexandra Palace, British Land, Cadogan Estate, Grosvenor and Gatwick Airport.
 
When not at work or <a href="https://underscore.co.uk/our-work/hunters-brewery/">appearing on tv</a>, time is given to family, friends and controversially following more than one football team.</div>
					</div>
				</span>
				

			
				
				<span class="item loop2" itemscope="" itemtype="http://schema.org/Person">
					<span class="img lazy loaded" data-src="https://underscore.co.uk/assets/uploads/2014/09/JAMIE2.jpg" data-bgimage="1" style="background-image: url(&quot;https://underscore.co.uk/assets/uploads/2014/09/JAMIE2.jpg&quot;); background-size: cover;"></span>
					<span class="hover">
						<span class="center">
							<div class="name title" itemprop="name">Jamie Hezelgrave</div>
							<div class="subtitle_underscore"> </div>
							<div class="job_position subtitle" itemprop="jobTitle">Senior Account Manager</div>
						</span>
					</span>
					<div class="team_description">
						<div class="close"> </div>
						<div class="team_name">Jamie Hezelgrave</div>
						<div class="subtitle_underscore"> </div>
						<div class="team_quote">"be who you are and say what you feel, because those who mind don’t matter and those who matter don’t mind"</div>
						<div class="team_bio">Jamie is a key account manager at Underscore with a diverse background in marketing communications, branding, property and events. He project manages the delivery of innovative and effective brand development and communications projects across print and digital. Whilst a strategic and commercial thinker, Jamie has a strong interest in design and believes it is essential for all brands trying to maintain or achieve competitive advantage. </div>
					</div>
				</span>
				

			
				
				<span class="item loop0" itemscope="" itemtype="http://schema.org/Person">
					<span class="img lazy loaded" data-src="https://underscore.co.uk/assets/uploads/2014/09/maria-600x454.jpg" data-bgimage="1" style="background-image: url(&quot;https://underscore.co.uk/assets/uploads/2014/09/maria-600x454.jpg&quot;); background-size: cover;"></span>
					<span class="hover">
						<span class="center">
							<div class="name title" itemprop="name">Maria Djaleva</div>
							<div class="subtitle_underscore"> </div>
							<div class="job_position subtitle" itemprop="jobTitle">Digital Account Manager</div>
						</span>
					</span>
					<div class="team_description">
						<div class="close"> </div>
						<div class="team_name">Maria Djaleva</div>
						<div class="subtitle_underscore"> </div>
						<div class="team_quote">"Innovate or die"</div>
						<div class="team_bio">I am absolutely ecstatic to be joining the Underscore team, where digital innovation is constantly explored and applied to amplify brand stories through immersing audiences in distinctive brand experiences. We want to excel communications to a new level and provoke deeper connections where all senses are engaged. This is the pure purpose of new technology; it’s becoming very personal. I am looking forward to push boundaries and help our clients evolve whilst adopting innovation on every consumer touchpoint.</div>
					</div>
				</span>
				

			
				
				<span class="item loop1" itemscope="" itemtype="http://schema.org/Person">
					<span class="img lazy loaded" data-src="https://underscore.co.uk/assets/uploads/2014/09/Staff-ChrisC-SDD.jpg" data-bgimage="1" style="background-image: url(&quot;https://underscore.co.uk/assets/uploads/2014/09/Staff-ChrisC-SDD.jpg&quot;); background-size: cover;"></span>
					<span class="hover">
						<span class="center">
							<div class="name title" itemprop="name">Chris Collins</div>
							<div class="subtitle_underscore"> </div>
							<div class="job_position subtitle" itemprop="jobTitle">Creative brand manager</div>
						</span>
					</span>
					<div class="team_description">
						<div class="close"> </div>
						<div class="team_name">Chris Collins</div>
						<div class="subtitle_underscore"> </div>
						<div class="team_quote">"be yourself, everyone else is taken"</div>
						<div class="team_bio">Chris joined underscore last year with the aim of crafting and delivering engaging, original brand stories. His role encompasses the overseeing of a brand's journey, from creation/evolution, right through to market reception and beyond. 

In his free time he endeavours to master the lost art of the casual wanderer, seeing as much as London has to offer. Especially it's pubs.

Key clients have included Grosvenor, Spirit of Harrogate, Nash Bond and Visa.</div>
					</div>
				</span>
				

			
				
				<span class="item loop2" itemscope="" itemtype="http://schema.org/Person">
					<span class="img lazy loaded" data-src="https://underscore.co.uk/assets/uploads/2014/09/P1030403-920x613-600x400.jpg" data-bgimage="1" style="background-image: url(&quot;https://underscore.co.uk/assets/uploads/2014/09/P1030403-920x613-600x400.jpg&quot;); background-size: cover;"></span>
					<span class="hover">
						<span class="center">
							<div class="name title" itemprop="name">Matt O'Halloran</div>
							<div class="subtitle_underscore"> </div>
							<div class="job_position subtitle" itemprop="jobTitle">senior account manager</div>
						</span>
					</span>
					<div class="team_description">
						<div class="close"> </div>
						<div class="team_name">Matt O'Halloran</div>
						<div class="subtitle_underscore"> </div>
						<div class="team_quote">"Great minds discuss ideas"</div>
						<div class="team_bio">Matt has a diverse background providing property marketing services for national and boutique property consultants and major institutional clients. Matt also has a huge amount of brand and communications experience, having previously worked with client services in varied sectors from retail, FMCG, logistics and property. Matt is responsible for growing our retail and property client sectors.</div>
					</div>
				</span>
				

			
				
				<span class="item loop0" itemscope="" itemtype="http://schema.org/Person">
					<span class="img lazy loaded" data-src="https://underscore.co.uk/assets/uploads/2014/09/bryony-600x454.jpg" data-bgimage="1" style="background-image: url(&quot;https://underscore.co.uk/assets/uploads/2014/09/bryony-600x454.jpg&quot;); background-size: cover;"></span>
					<span class="hover">
						<span class="center">
							<div class="name title" itemprop="name">Bryony Hamilton Kelly</div>
							<div class="subtitle_underscore"> </div>
							<div class="job_position subtitle" itemprop="jobTitle">studio operations manager</div>
						</span>
					</span>
					<div class="team_description">
						<div class="close"> </div>
						<div class="team_name">Bryony Hamilton Kelly</div>
						<div class="subtitle_underscore"> </div>
						<div class="team_quote">"simplicity is key"</div>
						<div class="team_bio">Bryony comes to us from a background in Architecture, 3D visualisation and Interior Design where she managed various studios including the renowned Arc Viz studio, Hayes Davidson and Lighting studio Cinimod Studio.  Her time at Underscore is split between growth of the business with Neil and the senior team, financial control and day to day management of the studio and team.  She enjoys the immersion in an established professional agency whose brand continues to grow, expand - and surprise.

Socially, Bryony has a passion for cocktails, cats, writing, baking, yoga and colour coding things (not necessarily in that order)</div>
					</div>
				</span>
				

			
				
				<span class="item loop1" itemscope="" itemtype="http://schema.org/Person">
					<span class="img lazy loaded" data-src="https://underscore.co.uk/assets/uploads/2014/09/WILLA2.jpg" data-bgimage="1" style="background-image: url(&quot;https://underscore.co.uk/assets/uploads/2014/09/WILLA2.jpg&quot;); background-size: cover;"></span>
					<span class="hover">
						<span class="center">
							<div class="name title" itemprop="name">Will Asken</div>
							<div class="subtitle_underscore"> </div>
							<div class="job_position subtitle" itemprop="jobTitle">designer</div>
						</span>
					</span>
					<div class="team_description">
						<div class="close"> </div>
						<div class="team_name">Will Asken</div>
						<div class="subtitle_underscore"> </div>
						<div class="team_quote">"rome wasn’t built in a day. but I wasn’t on that particular job"</div>
						<div class="team_bio">Will is a brand designer with over 4 years industry experience, skilled in print, typography and motion, but with a real passion for branding. 

His work is about problem solving. He applies conceptual and critical thinking throughout the design process, asking questions, experimenting, testing and making. This allows him to approach his work from unusual perspectives, and produce innovative and unique results.

Will’s achievements to date include award-winning campaigns for Duke of York Square and The City Mills, and his role as lead creative on several key accounts, including Olam International, Goals Soccer Centres and Seafish.

Allergic to the outside, on weekends find him in the back room of a crap pub, making or watching ropey punk music.</div>
					</div>
				</span>
				

			
				
				<span class="item loop2" itemscope="" itemtype="http://schema.org/Person">
					<span class="img lazy loaded" data-src="https://underscore.co.uk/assets/uploads/2014/09/TILLY1.jpg" data-bgimage="1" style="background-image: url(&quot;https://underscore.co.uk/assets/uploads/2014/09/TILLY1.jpg&quot;); background-size: cover;"></span>
					<span class="hover">
						<span class="center">
							<div class="name title" itemprop="name">Natalie Harris</div>
							<div class="subtitle_underscore"> </div>
							<div class="job_position subtitle" itemprop="jobTitle">designer</div>
						</span>
					</span>
					<div class="team_description">
						<div class="close"> </div>
						<div class="team_name">Natalie Harris</div>
						<div class="subtitle_underscore"> </div>
						<div class="team_quote">"all creativity should communicate in a nanosecond"</div>
						<div class="team_bio">Brand designer at Underscore, Natalie has a multi-disciplinary background in design. With a first class honours from Central St Martins in Product Design, she has since worked with a host of leading commercial brands and high street retailers, delivering successful product and brand entities. Accolades include winning Best Future Concept at the Building Better Healthcare Awards in 2007 for her Hygiene Compliance design concept. 

With a clear understanding that - centric to brand communications; are real people. Natalie applies rigorous analytical research and thinking to brand creation, which are articulated by the appropriate context and rationales. Whether promoting a product, service or an experience, applying a holistic approach to brand positioning ensures the final product connects successfully with; real people. 

Passionate and driven, Natalie considers herself a bit of an anthropologist. 'Getting underneath and adding weight' to her means, asking the right questions, challenging perceptions and reaching further to 'the ideal world'.  </div>
					</div>
				</span>
				

			
				
				<span class="item loop0" itemscope="" itemtype="http://schema.org/Person">
					<span class="img lazy" data-src="https://underscore.co.uk/assets/uploads/2014/09/CHRISN1.jpg" data-bgimage="1"></span>
					<span class="hover">
						<span class="center">
							<div class="name title" itemprop="name">Chris Noone</div>
							<div class="subtitle_underscore"> </div>
							<div class="job_position subtitle" itemprop="jobTitle">designer</div>
						</span>
					</span>
					<div class="team_description">
						<div class="close"> </div>
						<div class="team_name">Chris Noone</div>
						<div class="subtitle_underscore"> </div>
						<div class="team_quote">"the moment you doubt whether you can fly, you cease for ever to be able to do it"</div>
						<div class="team_bio">Inquisitive in approach, Chris relies on details to inform his work and create clean, well thought out designs that allow brands to express their personalities and deliver creative results to the highest standard. With the belief that design is most effective when it connects with the intended audience and further afield, Chris enjoys looking into design relationships and how this can be brought into the creative process.

Away from the desk, Chris enjoys Pina Coladas and getting caught in the rain.</div>
					</div>
				</span>
				

			
				
				<span class="item loop1" itemscope="" itemtype="http://schema.org/Person">
					<span class="img lazy" data-src="https://underscore.co.uk/assets/uploads/2014/09/EVE-600x395.jpg" data-bgimage="1"></span>
					<span class="hover">
						<span class="center">
							<div class="name title" itemprop="name">Eve Entwisle</div>
							<div class="subtitle_underscore"> </div>
							<div class="job_position subtitle" itemprop="jobTitle">designer</div>
						</span>
					</span>
					<div class="team_description">
						<div class="close"> </div>
						<div class="team_name">Eve Entwisle</div>
						<div class="subtitle_underscore"> </div>
						<div class="team_quote">"a good idea, is a good idea forever"</div>
						<div class="team_bio">Eve Entwisle is an ideas-driven designer with a foundation art, a degree in graphic design, a calendar sold in Marks &amp; Spencers, and has recently had work featured on the BBC. She’s modest too.

With over 6 years of industry experience, she joined Underscore in 2013 to push briefs further, often offering up the ‘non-obvious’ solution. 

Alongside being influenced by anything and everything around her, Eve brings heaps of enthusiasm, a keen eye for detail, and an obsession for consistency to every job from start to finish. Clients have included The Royal Society of Chemistry, The Body Shop, Carphone Warehouse, and NUS to name just a few.

Despite the fact that Eve’s drawing skills have failed to improve since the age of 5,  we embrace her naive style for our regular Friday instagram cartoon ‘Neg &amp; Noon’ – a unique insight into the typical life of an egg and spoon.</div>
					</div>
				</span>
				

			
				
				<span class="item loop2" itemscope="" itemtype="http://schema.org/Person">
					<span class="img lazy" data-src="https://underscore.co.uk/assets/uploads/2014/09/RACH.jpg" data-bgimage="1"></span>
					<span class="hover">
						<span class="center">
							<div class="name title" itemprop="name">Rachael Bradley</div>
							<div class="subtitle_underscore"> </div>
							<div class="job_position subtitle" itemprop="jobTitle">strategic brand manager</div>
						</span>
					</span>
					<div class="team_description">
						<div class="close"> </div>
						<div class="team_name">Rachael Bradley</div>
						<div class="subtitle_underscore"> </div>
						<div class="team_quote">"give me time and I’ll give you a revolution"</div>
						<div class="team_bio">Covering all things strategic, Rachael plays an important role in getting underneath brands to articulate their story 
and in identifying opportunities for audience engagement.

Since joining the team in 2014, fresh off the plane from Australia, Rachael has been busy applying her industry experience towards
new ideas for her clients and is inspired by a passion for brand experience.

You’ll find Rachael dressed in black &amp; white (consistency is key) hunting out the latest London events and exhibitions in her spare time, fuelling an endless endeavour to stay ahead of the curve. </div>
					</div>
				</span>
				

			
				
				<span class="item loop0" itemscope="" itemtype="http://schema.org/Person">
					<span class="img lazy" data-src="https://underscore.co.uk/assets/uploads/2014/09/CHRISO.jpg" data-bgimage="1"></span>
					<span class="hover">
						<span class="center">
							<div class="name title" itemprop="name">Chris O'Leary</div>
							<div class="subtitle_underscore"> </div>
							<div class="job_position subtitle" itemprop="jobTitle">designer</div>
						</span>
					</span>
					<div class="team_description">
						<div class="close"> </div>
						<div class="team_name">Chris O'Leary</div>
						<div class="subtitle_underscore"> </div>
						<div class="team_quote">"I just won't sleep," I decided. There were so many other interesting things to do"</div>
						<div class="team_bio">Chris O'leary joined Underscore after graduating from Norwich University of Arts in 2013. Since joining, Chris has tackled every project with energy and enthusiasm to elevate the work across a variety of mediums. 

His responsibilities to range from ideas generation, planning and execution of projects. As well as liaising with clients, developers and printers.

When tackling a project, Chris listens to the clients needs with the aim to always find the underlying problems they may be facing, in order to offer a logical and creative solution. This includes projects such as Living Retreats, Stenprop and Slingsby Gin. </div>
					</div>
				</span>
				

			
				
				<span class="item loop1" itemscope="" itemtype="http://schema.org/Person">
					<span class="img lazy" data-src="https://underscore.co.uk/assets/uploads/2014/09/WILL1.jpg" data-bgimage="1"></span>
					<span class="hover">
						<span class="center">
							<div class="name title" itemprop="name">Will Meighan</div>
							<div class="subtitle_underscore"> </div>
							<div class="job_position subtitle" itemprop="jobTitle">moving image designer</div>
						</span>
					</span>
					<div class="team_description">
						<div class="close"> </div>
						<div class="team_name">Will Meighan</div>
						<div class="subtitle_underscore"> </div>
						<div class="team_quote">"If you learn from your mistakes, then I'm a f*cking genius"</div>
						<div class="team_bio">Rumour has it that some time in 1992 the great videographer the world has seen was born deep in the Home Counties, reared on self-isolation and bootlegged VHS’s he would grow to be a valuable asset for a central London branding agency. While no proof exists of his birth, it is assumed that Will is this mythological man.

With razor sharp skills in shooting video, editing, animation and digital design, he is a formidable force hindered only by his Chip Shop Award winning dark sense of humour. His views on branding mean he approaches each project looking to find the solution with the best experience for the end user, both in usability and enjoyment.

His background includes producing birthday raps for friends, video content for music festivals such as Detonate and Bergenfest Norway, and moving image and digital solutions for clients such as Nash Bond, CBRE and Seafish.

In an attempt to confirm his mythical status, Will spends time outside the studio spitting bars, rolling dice and stuffing his face with lahmacun.</div>
					</div>
				</span>
				

			
				
				<span class="item loop2" itemscope="" itemtype="http://schema.org/Person">
					<span class="img lazy" data-src="https://underscore.co.uk/assets/uploads/2014/09/Ed-600x454.jpg" data-bgimage="1"></span>
					<span class="hover">
						<span class="center">
							<div class="name title" itemprop="name">Ed Crawford</div>
							<div class="subtitle_underscore"> </div>
							<div class="job_position subtitle" itemprop="jobTitle">strategic account executive</div>
						</span>
					</span>
					<div class="team_description">
						<div class="close"> </div>
						<div class="team_name">Ed Crawford</div>
						<div class="subtitle_underscore"> </div>
						<div class="team_quote">"I took the batteries out my mysticism and put them in my thinking cap"</div>
						<div class="team_bio">Ed is one of the newest members of the team, joining as a strategy-focused account executive in March 2015. Having graduated from the University of Oxford last year with a degree in Archaeology &amp; Anthropology, Ed has a passion for understanding what makes people tick, and uses this passion throughout his approach to branding and communications.
 
Ed has a varied role at Underscore, splitting his time between looking after accounts, liaising with suppliers, feeding into brand strategy, and writing copy for our online content.
 
In his spare time Ed enjoys real ales, lazy Sundays, and annoying his friends with close-harmony singing.</div>
					</div>
				</span>
				

						
				<a class="item hiring single" href="https://www.underscore.co.uk/jobs/">
					<span class="hover">
						<span class="center">
							<span class="hiring_title">WE’RE HIRING</span>
							<span class="hiring_subtitle">Underscore are currently seeking ambitious, talented individuals to join the team</span>
							<div class="subtitle_underscore"> </div>
							<span class="hiring_more">VIEW VACANCIES</span>
					</span>
				</span></a>			

			
		</div>

	</aside>
	
	<div class="space100"></div>




    	    <aside id="search" class="active v2">
	    <div class="content-row">
	        <form action="https://www.underscore.co.uk/our-work-search/" method="post" enctype="multipart/form-data">
				<span class="label">SEE MORE PROJECTS</span>
	        	<div class="customselect">
		        	<input type="hidden" name="worksearch[industry]" value="" class="value">
		        	<span href="javascript:;" class="select">SECTOR...</span>
		        	<div class="dropdown viewport">
			        	<div class="dropdownlist overview">
							<div data-value="" class="item selected">SECTOR...</div>
										        	
				        	<!--<div data-value="" class="item" ></div>
						--> 
							<div data-value="291" class="item">property</div>
							<div data-value="297" class="item">professional services</div>
							<div data-value="292" class="item">fmcg</div>		        	
				        	<div data-value="293" class="item">other</div>
										        	
				        	
										        	
				        	
			        	</div>
		        	</div>
	        	</div>
	        	<div class="customselect">
		        	<input type="hidden" name="worksearch[type]" value="" class="value">
		        	<span href="javascript:;" class="select">SERVICE...</span>
		        	<div class="dropdown viewport">
			        	<div class="dropdownlist overview">
							<div data-value="" class="item selected">SERVICE...</div>
										        	<div data-value="294" class="item">branding</div>
										        	<div data-value="295" class="item">communications</div>
										        	<div data-value="296" class="item">digital</div>
										        	<div data-value="298" class="item">other</div>
						 
			        	</div>
		        	</div>
	        	</div>

	        	<button type="submit" data-nonce="7b8db29897" disabled="disabled">Search</button>			        	
	        </form>
	    </div>
    </aside>
			<a href="https://www.underscore.co.uk/contact-us/"><div class="make_a_connection">
		<div class="style1">to make a connection with&nbsp;</div><div class="logo"> </div><div href="/contact-us/" class="style1">&nbsp;click&nbsp; here</div>
	</div></a>
	    <aside id="subscribe_newsletter_wrap">
		<div class="content-row">
			<form id="subscribe_newsletter">
				<div class="message intro"><em>Get connected! </em>Sign up to the Underscore Newsletter</div>
				<div class="message thanks"><em>Thank you!</em>You will now receive monthly news updates from the team at Underscore</div>
				<div class="fields">
					<input type="text" name="name" class="name" placeholder="Your full name">
					<input type="text" name="email" class="email" placeholder="Email address">
					<a data-nonce="1c6972fc6c" href="javascript:;" class="button load">Subscribe<img src="./About _ Underscore _ Branding, Design, Digital_files/ajax-button.png" class="loading"></a>
				</div>
				
			</form>
		</div>
	</aside>	<footer class="footer1">
		<div class="content-row social_icons">
			<a href="https://twitter.com/underscorelive" class="twitter" target="_blank"><span class="icon"></span></a>
			<a href="https://www.facebook.com/UnderscoreLive" class="facebook" target="_blank"><span class="icon"></span></a>
			<a href="https://www.linkedin.com/company/underscore" class="linkedin" target="_blank"><span class="icon"></span></a>
			<a href="http://instagram.com/underscoreuk" class="instagram" target="_blank"><span class="icon"></span></a>
			<a href="https://www.pinterest.com/underscorelive/" class="pinterest" target="_blank"><span class="icon"></span></a>
		</div>		
		<div class="content-row clear columns4">
			<div class="column"><a href="mailto:hello@underscore.co.uk">hello@underscore.co.uk</a></div>
			<div class="column"><a href="https://www.underscore.co.uk/jobs/">Careers</a></div>
			<div class="column"><a href="javascript:;" id="open_subscribe_newsletter">Newsletter</a></div>
			<div class="column"><a href="tel:+44 (0)20 7631 8400">+44 (0)20 7631 8400</a></div>
		</div>
	</footer>

	
    <footer class="footer3">
	    <div class="content-row clear">
			© Copyright underscore 2015. All rights reserved. | <ul id="menu-foote-menu" class="menu"><li id="menu-item-10794" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10794"><a href="https://www.underscore.co.uk/terms-conditions/">Terms &amp; Conditions</a></li>
</ul>	    </div>
    </footer>
     

    <div class="map" style="width: 960px;">
   <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2965.0824050173574!2d-93.63905729999999!3d41.998507000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sWebFilings%2C+University+Boulevard%2C+Ames%2C+IA!5e0!3m2!1sen!2sus!4v1390839289319" width="80%" height="400px" frameborder="0" style="border:0"></iframe>
</div>
 
</section>

      <script src="js/script.js"></script>
 <script>

let sidebar = document.querySelector(".sidebar");
let closeBtn = document.querySelector("#btn");
let searchBtn = document.querySelector(".bx-search");
 
 
closeBtn.addEventListener("click", ()=>{
  sidebar.classList.toggle("open");
  menuBtnChange();//calling the function(optional)
});
 
searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search iocn
  sidebar.classList.toggle("open");
  menuBtnChange(); //calling the function(optional)
});

// following are the code to change sidebar button(optional)
function menuBtnChange() {
 if(sidebar.classList.contains("open")){
   closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
 }else {
   closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
 }
}
</script>
 
</body>

</html>
 