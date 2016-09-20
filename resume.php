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
			
			<div id="heading" class="col-lg-5 text-xs-left <?php echo getVisibility('heading')?>" >
			<div class="blue-block"></div>
				<?php if( (PAGE=="INDEX" AND getVisibility('heading')=="sec-visible ") OR PAGE=="ADMIN") {?>
				<h1 class="position-heading">Aftab Hassan</h1>
				<p class="text-primary heading-primary-text">Seeking Software Dev / Data Scientist
FTE position</p>
				<p>I love working on new challenges and that brings out the best in me. With my software development skills, research background in Data Science and Visualization and industry experience, I believe I will be a great fit for your organization.</p>
				<?php } ?>
			</div>
			
			<div id="profile_image" class="col-lg-3 text-xs-left <?php echo getVisibility('profile_image')?>" >
				<?php if( (PAGE=="INDEX" AND getVisibility('profile_image')=="sec-visible ") OR PAGE=="ADMIN") {?>
				<img class="avatar" src="images/aftab-img.png">
				<?php } ?>
			</div>
			
			<div id="social_info" class="col-lg-4 text-xs-right <?php echo getVisibility('social_info')?>">
				<?php if( (PAGE=="INDEX" AND getVisibility('social_info')=="sec-visible ") OR PAGE=="ADMIN") {?>
					<p>aftabh@uw.edu<i class="fa fa-envelope" aria-hidden="true"></i>
	</p>
					<p>425-394-9510<i class="fa fa-phone" aria-hidden="true"></i></p>
					<p>www.linkedin.com/in/aftab-hassan<i class="fa fa-linkedin" aria-hidden="true"></i></p>
					<p>www.github.com/mygithub <i class="fa fa-github" aria-hidden="true"></i></p>
				<?php }?>	
			</div>
		</div>
		<!--<hr class="text-primary" >-->
		<div class="hr-line"></div>
		<div class="row">
			<div class="col-lg-7">
								
				<div id="work_experience" class="<?php echo getVisibility('work_experience')?>">
					<?php if( (PAGE=="INDEX" AND getVisibility('work_experience')=="sec-visible ") OR PAGE=="ADMIN") {?>
					<h2>Work Experience</h2>
					<div class="navy-block"></div>
					<div class="bottomSpace" id="work_experience_researcher">
						<div class="row">
							<div class="col-lg-12">09/2014 - Present</div>
						</div>
						<h4>Research Assistant in Data Science</h4>
						<h5>Center for Data Science, University of Washington</h5>
						<div class="text-primary">Tasks</div>
						<ul class="resume">
							<li>Extract SQL data, Data cleaning, Feature selection, Build machine learning models (Regression, Clustering and Network algorithms), create REST APIs</li>
							<li>Presented demos at top conferences such as StrataConf and CLEF</li>
							<li>Awarded extended Scholarship throughout my Master's program and funding for my Thesis in appreciation of performance</li>
						</ul>
						<div><span class="text-primary">Contact:</span>David Hazel (Managing Director) - dhazel@uw.edu</div>
					</div>
				
					<div class="navy-block"></div>
					<div class="bottomSpace">
						<div class="row">
							<div class="col-lg-12">07/2012 - 04/2014</div>
						</div>
						<h4>Platform Software Engineer</h4>
						<h5>Dell R&D</h5>
						<div class="text-primary">Tasks</div>
						<ul>
							<li>Worked at Firmware Dev. team of DELL Enterprise Blade Servers , owned the module "Config Manager", implemented features, made high impact bug fixes</li>
							<li>Developed Automated Test utility "Root Cause Analysis Tool" which does text mining of data from large log files such as Server logs, System logs and Application logs. Used CUnit for testing and GCov for code code coverage</li>
							<li>Fixed highest number of Sev-1 (high severity) bugs in Mid-year review 2013</li>
						</ul>
						<div><span class="text-primary">Contact:</span> Tandava Popuri (Software Engineer Director) - Tandava_Popuri@Dell.com</div>
					</div>
					<div class="navy-block"></div>
					<div class="bottomSpace">
						<div class="row">
							<div class="col-lg-12">05/2011 - 07/2011</div>
						</div>
						<h4>Engineering Intern</h4>
						<h5>Indian Space Research Organization (ISRO)</h5>
						<div class="text-primary">Tasks</div>
						<ul>
							<li>Developed Memory Profiler to compute memory location of flight parameters in Satellite Launch Vehicle code in order to support flight simulation</li>
							<li>Got org-wide appreciation and a special meeting with the Director of Flight Department. Was offered full-time position.</li>
						</ul>
						<div><span class="text-primary">Contact:</span> Mookiah Thangavel (Group Head, FCG/AVN) - t_mookiah@vssc.gov.in</div>
					</div>
					<?php }?>
				</div>
				
				<div id="projects" class="<?php echo getVisibility('projects')?> bottomSpace">
					<?php if( (PAGE=="INDEX" AND getVisibility('projects')=="sec-visible ") OR PAGE=="ADMIN") {?>
					<h2>Projects</h2>
					<div>
						<h5>Healthscope -Heart failure patient Cost prediction for Insurance companies using Linear Regression</h5>
						<ul>
							<li>http://tinyurl.com/costprediction - Built Web application for insurance companies to forecast cost associated with a patient.</li>
						</ul>
					</div>
					<div>
						<h5>Multi Objective Medication Recommendation for Heart Failure patients - Thesis funded by MultiCare</h5>
						<ul>
							<li>http://tinyurl.com/multicaremed - Construct Bayesian Network to discover causal relationship in patient data, Web application to recommend medications</li>
						</ul>
					</div>
					<div>
						<h5>Roger Federer Tennis analysis using Artificial Intelligence and 3D visualization on WebGL</h5>
						<ul>
							<li>http://tinyurl.com/tennisanalysis - Predict match outcome using decision tree, discover trends, provide actionable insights, 3D Visual of tennis court</li>
						</ul>
					</div>
					<?php }?>
				</div>
				
				<div id="education" class="<?php echo getVisibility('education')?>">
					<?php if( (PAGE=="INDEX" AND getVisibility('education')=="sec-visible ") OR PAGE=="ADMIN") {?>
					<h2>Education</h2>
					<div class="navy-block"></div>
					<div class="bottomSpace" id="education_master">
						
						<div class="row">
							<div class="col-lg-6 text-xs-left">09/2014 - 08/2016</div>
							<div class="col-lg-6 text-xs-right">GPA : 3.6 / 4.0</div>
						</div>
						
						<h4>Master's of Science in Computer Science and Systems</h4>
						<h5>University of Washington</h5>
					</div>
					<div class="navy-block"></div>
					<div class="bottomSpace" id="education_bachelor">
						<div class="row">
							<div class="col-lg-6 text-xs-left">08/2008 - 02/2012</div>
							<div class="col-lg-6 text-xs-right">GPA : 8.0 / 10.0</div>
						</div>
						<h4>Bachelor of Engineering, Information Technology</h4>
						<h5>National Institute of Technology Karnataka, India</h5>
					</div>
					<?php }?>
				</div>
				
			</div>
			<div class="col-lg-5" >
				<div id="skills_competencies" class="<?php echo getVisibility('skills_competencies')?> bottomSpace">
					<?php if( (PAGE=="INDEX" AND getVisibility('skills_competencies')=="sec-visible ") OR PAGE=="ADMIN") {?>
					<h2>Skills & Competencies</h2>
					<div>
						<h6>Programming Languages : C, Java, PHP, .NET, C#</h6>
						<progress class="progress" value="90" max="100" aria-describedby="example-caption-1"></progress>
					</div>
					<div>
						<h6>Scripting (R, Perl, PHP, Python)</h6>
						<progress class="progress" value="80" max="100" aria-describedby="example-caption-1"></progress>
					</div>
					<div>
						<h6>Databases, ETL (SQL, MySQL, MSSQL Azure, RDBMS)</h6>
						<progress class="progress" value="77" max="100" aria-describedby="example-caption-1"></progress>
					</div>
					<div>
						<h6>Web (HTML, JS, WebGL, d3.js, SOAP, Webservice)</h6>
						<progress class="progress" value="60" max="100" aria-describedby="example-caption-1"></progress>
					</div>
					<?php } ?>
				</div>
				
				<div id="achievements" class="<?php echo getVisibility('achievements')?> bottomSpace">
				
					<?php if( (PAGE=="INDEX" AND getVisibility('achievements')=="sec-visible ") OR PAGE=="ADMIN") {?>
					<h2>Achievements</h2>
					<div>
						<h5>"Top Scholar" Award at the University of Washington for the year 2014-2015</h5>
						<p>Recipient of Top Scholar Award due to academic and research achievements. Received extended fee waiver for performance at Center for Data Science, UW</p>
					</div>
					<div>
						<h5>Winner of the "I-Unlock-Joy" competition held by Microsoft and Nokia</h5>
						<p>Won a Nokia Lumia phone for developing a Windows Phone application with high user downloads.</p>
					</div>
					<div>
						<h5>Microsoft Student Partner (MSP)</h5>
						<p>Microsoft appointed University Ambassador at NITK, Surathkal.</p>
					</div>
					<?php }?>
				
				</div>
				
				
				<div id="publications" class="<?php echo getVisibility('publications')?> bottomSpace">
					<?php if( (PAGE=="INDEX" AND getVisibility('publications')=="sec-visible ") OR PAGE=="ADMIN") {?>
					<h2>Publications</h2>
					<div>
						<h5>ICDM'14 - Pathway-Finder:Interactive Recommender System for Supporting Personalized Care Pathways</h5>
						<p>Rui Liu, Raj Velamur Srinivasan, Kiyana Zolfaghar, Si-Chi Chin, Senjuti Basu Roy, Aftab Hasan, David Hazel, ICDM 2014</p>
					</div>
					<div>
						<h5>ACM Digital Health 2015 - Predicting 30-day risk and cost of "all-cause" hospital readmissions</h5>
						<p>Shanu Sushmita et al. In Proceedings of ACM Digital Health 2015</p>
					</div>
					<div>
						<h5>CLEF 2015 - Age, Gender and Personality Recognition using Tweets in a Multilingual Setting</h5>
						<p>Mounica Arroju , Aftab Hassan , Golnoosh Farnadi. Notebook for PAN at CLEF 2015</p>
					</div>
					<?php }?>
				</div>
				
				
				<div id="clubs_and_activities" class="<?php echo getVisibility('clubs_and_activities')?> bottomSpace">
					<?php if( (PAGE=="INDEX" AND getVisibility('clubs_and_activities')=="sec-visible ") OR PAGE=="ADMIN") {?>
					<h2>Clubs and Activities</h2>
					<div>
						<h5>Husky Tennis Club</h5>
						<p>Member of the tennis club at UW, Seattle</p>
					</div>
					<div>
						<h5>Rotaract Club</h5>
						<p>Web Developer for the Rotaract Club, NITK Chapter</p>
					</div>
					<div>
						<h5>Sahara Toast Master's Club</h5>
						<p>Youth President, Sahara Toast Master's Club</p>
					</div>
					<?php }?>
				</div>
				
				<div  id="interests" class="<?php echo getVisibility('interests')?> bottomSpace">
					<?php if( (PAGE=="INDEX" AND getVisibility('interests')=="sec-visible ") OR PAGE=="ADMIN") {?>
					<h2>Interests</h2>
					<div>
						<p>
							Software Development | Machine Learning |
							OData Science, Predictive Analytics, NLP |
							Object oriented programming, Java, .NET, PHP |
							3D visualization, WebGL, OpenGL, three.js, d3.js |
							Front-end Development, Back-end Development |
							UNIX/LINUX/Open Source | Web Servicess, REST API
						</p>
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