<?php 
require('config.php');
if(!defined('PAGE')){
	echo "<h1>Page Not Found</h1>";
	exit;
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="../../favicon.ico">	
		<title>My Resume</title>

		<!-- Bootstrap core CSS -->
		<link rel="stylesheet" href="bootstrap.css" >
		<link rel="stylesheet" href="style.css" >
		<link rel="stylesheet" href="font-awesome/css/font-awesome.css" >
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		
		<style>
			<?php if(PAGE=='ADMIN'){?>
				.sec-visible{
					visibility: visible;
				}
				.sec-hidden{
					opacity:0.5;
				}
				.setting{
					position:relative;
				}
				.setme{
					position: absolute;
					background: rgba(0,0,0,0.7);
					height: 100%;
					width: 100%;
					top: 0;
					left: 0;
					color:#FFF;
					text-align:center;
					font-size:25px;
				}
				.setme .setme_content{
					margin:auto;
				}
			<?php }else{?>
				.sec-visible{
					visibility: visible;
				}
				.sec-hidden{
					visibility: hidden;
					
				}
			<?php }?>
		</style>
		
	</head>

<body>
	
	<div class="container">

		<div class="row topHeader">
			
			<div id="heading" class="col-lg-6 text-xs-left <?php echo getVisibility('heading')?>" >
			<div class="blue-block"></div>
				<?php if( (PAGE=="INDEX" AND getVisibility('heading')=="sec-visible ") OR PAGE=="ADMIN") {?>
				<h1 class="position-heading">Aftab Hassan</h1>
				<p class="text-primary heading-primary-text" style="font-style: normal;">Software Engineer, GE Healthcare, Seattle</p>
				<p>I enjoy developing RESTful services that can scale big. I have a
graduate degree in Machine Learning from the Univ. of
Washington (selected as the lone recipient of ‘Top Scholar’
Award for 2015), and am fortunate to be part of a few research
publications. I feel empowered to write applications that can
harness the power of data, and am constantly looking for new
challenges in my pursuit of becoming a Full stack developer.</p>
				<?php } ?>
			</div>
			
			<div id="" class="col-lg-3 text-xs-left <?php echo getVisibility('profile_image')?>" >
				<?php if( (PAGE=="INDEX" AND getVisibility('profile_image')=="sec-visible ") OR PAGE=="ADMIN") {?>
				<!-- <img class="avatar" src="images/aftab-img.png"> -->
				<?php } ?>
			</div>
			
			<div id="social_info" class="col-lg-6 text-xs-right <?php echo getVisibility('social_info')?>">
				<?php if( (PAGE=="INDEX" AND getVisibility('social_info')=="sec-visible ") OR PAGE=="ADMIN") {?>
					<p>aftabh@uw.edu<i class="fa fa-envelope" aria-hidden="true"></i>
					</p>
					<p>4253949510<i class="fa fa-phone" aria-hidden="true"></i></p>
					<p>www.github.com/aftab90 <i class="fa fa-github" aria-hidden="true"></i></p>
					<p>www.linkedin.com/in/aftab-hassan<i class="fa fa-linkedin" aria-hidden="true"></i></p>
					
				<?php }?>	
			</div>
		</div>
		<!--<hr class="text-primary" >-->
		<div class="hr-line"></div>
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6">
								
				<div id="work_experience" class="<?php echo getVisibility('work_experience')?>">
					<?php if( (PAGE=="INDEX" AND getVisibility('work_experience')=="sec-visible ") OR PAGE=="ADMIN") {?>
					<h2 class='headingTextColor'>Work Experience</h2>
					<div class="navy-block"></div>
					<div class="bottomSpace" id="work_experience_researcher">
						
						<h4>Software Engineer</h4>
						<h5>GE Healthcare</h5>
						<div class="row">
							<div class="col-lg-12">10/2016	–	Present</div>
						</div>
						<div class="text-primary">Tasks</div>
						<ul class="resume">
							<li>Member of Analytics Team working on analyzing hospital data enabling doctors to make more informed decisions.</li>
							<li>I develop REST APIs to interact with Azure Active Directory (AAD) applications, ingest data to Azure Blob Store, and develop Machine Learning algorithms to create powerful decision support solutions.</li>
							<li>I developed two of the main APIs used by customers to upload files, and the back end APIs to visualize data as rich dashboards.</li>
						</ul>
						<!-- <div><span class="text-primary">Contact:</span>David Hazel (Managing Director) - dhazel@uw.edu</div> -->
					</div>
				
					<div class="navy-block"></div>
					<div class="bottomSpace">
						
						<h4>Machine Learning Researcher</h4>
						<h5>Center for Data Science, University of Washington</h5>
						<div class="row">
							<div class="col-lg-12">09/2014	–	09/2016</div>
						</div>
						<div class="text-primary">Tasks</div>
						<ul>
							<li>Awarded scholarship and funding for my Thesis to develop Machine Learning Models on hospital data</li>
							<li>I developed a framework to discover causal relations in patient data using Bayesian Networks, and recommend medications that would result in an ideal patient discharge experience. Tasks included Extract SQL data, Data cleaning, Feature selection, Build machine learning models (Regression, Clustering and Network algorithms)</li> 
						</ul>
						<!-- <div><span class="text-primary">Contact:</span> Tandava Popuri (Software Engineer Director) - Tandava_Popuri@Dell.com</div> -->
					</div>
					<div class="navy-block"></div>
					<div class="bottomSpace">
						<h4>Software Engineer</h4>
						<h5>Dell R&D</h5>
						<div class="row">
							<div class="col-lg-12">04/2012	–	04/2014</div>
						</div>
						<div class="text-primary">Tasks/Achievements </div>
						<ul>
							<li>Worked in Platform Team, developing firmware to foresee system failure.</li>
						</ul>
						<!-- <div><span class="text-primary">Contact:</span> Mookiah Thangavel (Group Head, FCG/AVN) - t_mookiah@vssc.gov.in</div> -->
					</div>

					<div class="navy-block"></div>
					<div class="bottomSpace">
						<h4>Engineering Intern</h4>
						<h5>Indian Space Research Organization (ISRO)</h5>
						<div class="row">
							<div class="col-lg-12">06/2011	–	08/2011</div>
						</div>
						<div class="text-primary">Tasks/Achievements </div>
						<ul>
							<li>Developed Memory Profiler for Satellite Launch Vehicle.Invited to special meeting with Director of Flight Dept.</li>
						</ul>
						<!-- <div><span class="text-primary">Contact:</span> Mookiah Thangavel (Group Head, FCG/AVN) - t_mookiah@vssc.gov.in</div> -->
					</div>
			<?php }?>
				</div>
				
				<div id="education" class="<?php echo getVisibility('education')?>">
					<?php if( (PAGE=="INDEX" AND getVisibility('education')=="sec-visible ") OR PAGE=="ADMIN") {?>
					<h2 class="headingTextColor">Education</h2>
					<div class="navy-block"></div>
					<div class="bottomSpace" id="education_master">
						<h4>Master's of Science in Computer Science</h4>
						<h5>University of Washington</h5>
						<div class="row">
							<div class="col-lg-6 text-xs-left">09/2014	–	08/2016</div>
							<div class="col-lg-6 text-xs-right">GPA	:	3.6	/	4.0</div>
						</div>
					</div>
					<br><br>
					<div class="navy-block"></div>
					<div class="bottomSpace" id="education_bachelor">
						<h4>Bachelor of Engineering, IT</h4>
						<h5>National Institute of Technology Surathkal</h5>
						<div class="row">
							<div class="col-lg-6 text-xs-left">08/2008	–	02/2012</div>
							<div class="col-lg-6 text-xs-right">GPA	:	8.0	/	10.0</div>
						</div>
					</div>
					<?php }?>
				</div>
				
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6" >
				<div id="skills_competencies" class="<?php echo getVisibility('skills_competencies')?> bottomSpace">
					<?php if( (PAGE=="INDEX" AND getVisibility('skills_competencies')=="sec-visible ") OR PAGE=="ADMIN") {?>
					<h2 class="headingTextColor">Skills & Competencies</h2>
					<div>
						<h6 style="float: left;width: 300px;">Programming Language<br> (Java/C) </h6><h6 style="">Scripting (R)</h6>
					</div><br>
					<div>
						<h6 style="float: left;width:300px;">Database (SQL Server,<br> MySQL) </h6><h6 style="">Test tools (Selenium)</h6>
					</div><br>
					<div>
						<h6>Web frameworks <br>(PHP/ASP.NET)</h6>
					</div>
					<?php } ?>
				</div>
				
				<div id="achievements" class="<?php echo getVisibility('achievements')?> bottomSpace">
				
					<?php if( (PAGE=="INDEX" AND getVisibility('achievements')=="sec-visible ") OR PAGE=="ADMIN") {?>
					<h2 class="headingTextColor">Achievements</h2>
					<div>
						<h5>"Top Scholar" Award at the University of Washington for the year 2014-2015</h5>
						<p>Recipient of Top Scholar Award due to academic and research achievements.</p>
					</div>
					<div>
						<h5>Winner of the "I-Unlock-Joy" competition held by Microsoft and Nokia</h5>
						<p>Won a Nokia Lumia phone for developing a Windows Phone application with high user downloads.</p>
					</div>
					<?php }?>
				
				</div>
				
				<div id="projects" class="<?php echo getVisibility('projects')?> bottomSpace">
					<?php if( (PAGE=="INDEX" AND getVisibility('projects')=="sec-visible ") OR PAGE=="ADMIN") {?>
					<h2 class="headingTextColor">Projects</h2>
					<div>
						<h5>Roger Federer Tennis analysis using Artificial Intelligence and 3Dvisualization on WebGLRoger Fede</h5>
						<ul>
							<li>http://tinyurl.com/tennisanalysis - Predict match outcome using decision tree, discover trends, provide actionable insights, 3D Visual of tennis court</li>						</ul>
					</div><br>
					<div>
						<h5>Multi Objective Medication Recommendation for Heart Failure patients - Thesis funded by MultiCare</h5>
						<ul>
							<li>http://tinyurl.com/multicaremed - Construct Bayesian Network to discover causal relationship in patient data, Web application to recommend medications</li>
						</ul>
					</div><br>
					<div>
						<h5>Age, Gender and Personality Prediction based on Twitter data, and Linear regression on Hadoop</h5>
						<ul>
							<li>http://tinyurl.com/aftabtwitter - Developed a system to analyze tweets, and predict personality traits. Used LIWC, ERCC and Linear Regression implemented on Hadoop.</li>
						</ul>
					</div>
					<?php }?>
				</div>

				<div id="publications" class="<?php echo getVisibility('publications')?> bottomSpace">
					<?php if( (PAGE=="INDEX" AND getVisibility('publications')=="sec-visible ") OR PAGE=="ADMIN") {?>
					<h2 class="headingTextColor">Publications</h2>
					<div>
						<h5>ICDM'14 - Pathway-Finder:Interactive Recommender System for Supporting Personalized Care Pathways</h5>
						<p>Rui Liu, Raj Velamur Srinivasan, Kiyana Zolfaghar, Si-Chi Chin, Senjuti Basu Roy, Aftab Hasan, David Hazel, ICDM 2014</p>
					</div>
					<div>
						<h5>CLEF 2015 - Age, Gender and Personality Recognition using Tweets in a Multilingual Setting</h5>
						<p>Mounica Arroju , Aftab Hassan , Golnoosh Farnadi. Notebook for PAN at CLEF 2015</p>
					</div>
					<?php }?>
				</div>
				
				
				<div id="clubs_and_activities" class="<?php echo getVisibility('clubs_and_activities')?> bottomSpace">
					<?php if( (PAGE=="INDEX" AND getVisibility('clubs_and_activities')=="sec-visible ") OR PAGE=="ADMIN") {?>
					<h2 class="headingTextColor">Clubs and Activities</h2>
					<div>
						<h5>Husky Tennis Club, University of Washington</h5>
					</div>
					<div>
						<h5>Sahara Toast Master's Club</h5>
						<p>Youth President</p>
					</div>
					
					<?php }?>
				</div>
				
				
			</div>
		</div>

	</div> <!-- /container -->
</body>
</html>
<?php 

function getVisibility($key){
	global $settings;
	$query = "SELECT section, status FROM settings";
	$result = mysql_query($query);
	if(mysql_num_rows($result) > 0){
		while($row = mysql_fetch_assoc($result)){
			$section = $row['section'];
			$status = $row['status'];
			$settings[$section] = $status;
		}
	}

	$class=PAGE=='ADMIN'?"setting":"";
	if(isset($settings[$key]) && $settings[$key] == 'visible'){
		return "sec-visible ". $class;
	}else{
		return "sec-hidden ". $class;
	}
}

?>
<?php if(PAGE=='ADMIN'){?>
<script type="text/javascript">
	var currSelectId = "";
	function changestatus(key,statusvalue){
		if(statusvalue=="Disable"){
			var status = "hidden";
		}else{
			var status = "visible";
		}
		jQuery('#'+key).find('.setme').html('<i class="fa fa-spinner"> Please wait...');		
		var sectionname = key;
		$.ajax({
			type: 'POST',
			url: 'save.php',
			data: {section: key, status : status} ,
			success: function(response) {
			if(response==1)
				location.reload();
			else
				alert("Something is wrong try again");
			}
		});
	}
	function dismissAll(){
		$( ".setme" ).hide();
	}
	
	jQuery(document).ready(function () {
	
		jQuery('.setting').mouseover(function () {					
			if(jQuery(this).find('.setme').length > 0){
				return;
			}
			currId = jQuery(this).prop('id');
			if(currSelectId !=currId){
				jQuery('.setme').remove();
			}
			currSelectId = jQuery(this).prop('id');
			enableDisableText = "Enable";

			if(jQuery(this).hasClass('sec-visible')){
				enableDisableText = "Disable";
			}
			
			jQuery(this).append('<div class="setme"><div><a href="javascript:void(0);" onclick="changestatus(currId,enableDisableText)">Click here</a> to '+enableDisableText+' this section.<a class="pull-right closeButton" href="javascript:void(0);" onclick="dismissAll()"><i class="fa fa-close"></i></a></div></div>');
			jQuery(this).addClass("setmeAdded");
		});
					
	});	
</script>
<?php }?>