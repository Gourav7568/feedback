<?php
   include("connect.php");
   
   if(isset($_POST['s1'])&& !empty($_POST['q1'])&& !empty($_POST['q2'])                         &&	!empty($_POST['q3'])&& !empty($_POST['q4'])&& !empty($_POST['q5'])&& !empty($_POST['q6'])&& !empty($_POST['q7'])&& !empty($_POST['q8'])&& !empty($_POST['q9'])&& !empty($_POST['q10'])&& !empty($_POST['q11'])&& !empty($_POST['q12'])&& !empty($_POST['q13'])&& !empty($_POST['q14'])&& !empty($_POST['q15'])&& !empty($_POST['q16'])&& !empty($_POST['q17'])&& !empty($_POST['q18']))
     {
		 mysqli_query($con,"insert into about_teaching set where
					name='".$_POST['q1']."',
					roll='".$_POST['q2']."',
					branch='".$_POST['q3']."',
					year='".$_POST['q4']."',
					q5='".$_POST['q5']."',
					q6='".$_POST['q6']."',
					q7='".$_POST['q7']."',
					q8='".$_POST['q8']."',
					q9='".$_POST['q9']."',
					q10='".$_POST['q10']."',
					q11='".$_POST['q11']."',
					q12='".$_POST['q12']."',
					q13='".$_POST['q13']."',
					q14='".$_POST['q14']."',
					q15='".$_POST['q15']."',
					q16='".$_POST['q16']."',
					q17='".$_POST['q17']."',
					q18='".$_POST['q18']."'   ");
	   $num=mysqli_insert_id($con);
	   if($num>0)
	   {
		   echo"data inserted succesfully";
		   }
		 
	}  
?>




<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<h2 align="center"> Feedback from students about teaching and curriculum </h2>
<h3>Dear Students,</h3>
<p style="font-size:20px">This form has been designed to seek feedback from you to strengthen the quality of teaching-learning enviroment and to improve the performance of the teachers. The information provided by you will be kept confidential.
</p>
<hr>
<body>
<style>
*{
	box-sizing: border-box;
}

html{
	font-size:100%;
}

body{
	font-family:Arial, Helvetica, sans-serif;
	font-size:1.2rem;
	background-color:#CCF;
}
.dec{
     margin:-20%;
    }
h2{
    text-decoration:underline;	
  }
</style>

        <form name="frm1" method="post" action="?">
        	<table width="100%" border="0" cellspacing="8" cellpadding="5">
 <div class="dec">
  <tr>
    <th  width="52%" scope="row">Name of the Student : </th>
    <td width="48%"><label>
      <input type="text" name="q1" id="q1" maxlength="50" required/>
    *</label></td>
  </tr>
  <tr>
    <th  scope="row">Roll No.</th>
    <td><label>
<input type="text" name="q2" id="q2" maxlength="10" required/>
*</label></td>
  </tr>
  <tr>
    <th  scope="row">Branch : </th>
    <td><select name="q3" id="q3">
        <option selected>--Select Branch--</option>
        <option value="CSE">Computer Science Engineering</option>
        <option value="ME">Mechanical Engineering</option>
        <option value="CE">Civil Engineering</option>
        <option value="EE">Electronics Engineering</option>
        <option value="MPE">Mechanical Production Engineering</option>
		<option value="MRE">Mechanical Refrigration Engineering</option>
    </select>
      *</td>
  </tr>
  <tr>
    <th  scope="row">Year :</th>
    <td><select name="q4" id="q4">
    	<option selected>--Select Year--</option>
        <option value="1st">Ist Year</option>
        <option value="2nd">IInd Year</option>
        <option value="3rd">IIIrd Year</option>
    </select>
      *</td>
  
  </tr>
  </div>
  <tr>
    <th colspan="2" scope="row"><div>
        <h2 style="color:#6C6;">This section tells us about teaching.</h2><br>
    </div></th>
    </tr>
   <tr>
    <th height="100" scope="row">->  The courses studied by me are relevant and the contents are revised at reasonable intervals*</th>
    <td><p>
      <label>
        <input type="radio" name="q5" value="Excellent" id="q5" required/>
        Excellent</label>
      
      <label>
        <input type="radio" name="q5" value="Very Good" id="q5">
        Very Good</label>
      
      <label>
        <input type="radio" name="q5" value="Good" id="q5">
        Good</label>
      
      <label>
        <input type="radio" name="q5" value="Average" id="q5">
        Average</label>
      
      <label>
        <input type="radio" name="q5" value="Unsatisfactory" id="q5">
        Unsatisfactory</label>
      
      </p></td>
  </tr>
   <tr>
    <th height="70" scope="row">->  The curriculum is designed so as to enhance our employability*</th>
    <td>
      <label>
        <input type="radio" name="q6" value="Excellent" id="q6" required/>
        Excellent</label>
      
      <label>
        <input type="radio" name="q6" value="Very Good" id="q6">
        Very Good</label>
      
      <label>
        <input type="radio" name="q6" value="Good" id="q6">
        Good</label>
      
      <label>
        <input type="radio" name="q6" value="Average" id="q6">
        Average</label>
      
      <label>
        <input type="radio" name="q6" value="Unsatisfactory" id="q6">
        Unsatisfactory</label>
      
      </td>
  </tr>
   <tr>
    <th height="100" scope="row">->  The courses by me have enhanced my knowledge as well as my skills and my capabilities.*</th><br> 
    <td>
      <label>
        <input type="radio" name="q7" value="Excellent" id="q7_0" required/>
        Excellent</label>
      
      <label>
        <input type="radio" name="q7" value="Very Good" id="q7">
        Very Good</label>
      
      <label>
        <input type="radio" name="q7" value="Good" id="q7">
        Good</label>
      
      <label>
        <input type="radio" name="q7" value="Average" id="q7">
        Average</label>
      
      <label>
        <input type="radio" name="q7" value="Unsatisfactory" id="q7">
        Unsatisfactory</label>
      <br>
      </td>
  </tr>
   <tr>
    <th height="69" scope="row">->  The entire syllabus is completed in time.*</th><br> 
    <td>
      <label>
        <input type="radio" name="q8" value="Excellent" id="q8" required/>
        Excellent</label>
      
      <label>
        <input type="radio" name="q8" value="Very Good" id="q8">
        Very Good</label>
      
      <label>
        <input type="radio" name="q8" value="Good" id="q8">
        Good</label>
      
      <label>
        <input type="radio" name="q8" value="Average" id="q8">
        Average</label>
      
      <label>
        <input type="radio" name="q8" value="Unsatisfactory" id="q8">
        Unsatisfactory</label>
      <br>
      </td>
  </tr>
   <tr>
    <th height="79" scope="row">->  The teachers guide the students for overall personality development of the students. *</th><br> 
    <td>
      <label>
        <input type="radio" name="q9" value="Excellent" id="q9" required/>
        Excellent</label>
      
      <label>
        <input type="radio" name="q9" value="Very Good" id="q9">
        Very Good</label>
      
      <label>
        <input type="radio" name="q9" value="Good" id="q9">
        Good</label>
      
      <label>
        <input type="radio" name="q9" value="Average" id="q9">
        Average</label>
      
      <label>
        <input type="radio" name="q9" value="Unsatisfactory" id="q9">
        Unsatisfactory</label>
      <br>
      </td>
  </tr>
   <tr>
    <th height="74" scope="row">->  The teachers provide the students oppurtunities to learn and grow.*</th><br> 
    <td>
      <label>
        <input type="radio" name="q10" value="Excellent" id="q10" required/>
        Excellent</label>
      
      <label>
        <input type="radio" name="q10" value="Very Good" id="q10">
        Very Good</label>
      
      <label>
        <input type="radio" name="q10" value="Good" id="q10">
        Good</label>
      
      <label>
        <input type="radio" name="q10" value="Average" id="q10">
        Average</label>
      
      <label>
        <input type="radio" name="q10" value="Unsatisfactory" id="q10">
        Unsatisfactory</label>
      <br>
      </td>
  </tr>
   <tr>
    <th height="74" scope="row">->  The teachers give regular and timely feedback on the performace of the students.*</th><br> 
    <td>
      <label>
        <input type="radio" name="q11" value="Excellent" id="q11" required/>
        Excellent</label>
      
      <label>
        <input type="radio" name="q11" value="Very Good" id="q11">
        Very Good</label>
      
      <label>
        <input type="radio" name="q11" value="Good" id="q11">
        Good</label>
      
      <label>
        <input type="radio" name="q11" value="Average" id="q11">
        Average</label>
      
      <label>
        <input type="radio" name="q11" value="Unsatisfactory" id="q11">
        Unsatisfactory</label>
      <br>
      </td>
  </tr>
   <tr>
    <th height="81" scope="row">->  The assessment and evalutaion process is fair and unbiased.*</th><br> 
    <td>
      <label>
        <input type="radio" name="q12" value="Excellent" id="q12" required/>
        Excellent</label>
      
      <label>
        <input type="radio" name="q12" value="Very Good" id="q12">
        Very Good</label>
      
      <label>
        <input type="radio" name="q12" value="Good" id="q12">
        Good</label>
      
      <label>
        <input type="radio" name="q12" value="Average" id="q12">
        Average</label>
      
      <label>
        <input type="radio" name="q12" value="Unsatisfactory" id="q12">
        Unsatisfactory</label>
      <br>
      </td>
  </tr>
   <tr>
    <th height="70" scope="row">->  The teacher take efforts to inculcate soft skills in the students.*</th><br> 
    <td>
      <label>
        <input type="radio" name="q13" value="Excellent" id="q13" required/>
        Excellent</label>
      
      <label>
        <input type="radio" name="q13" value="Very Good" id="q13">
        Very Good</label>
      
      <label>
        <input type="radio" name="q13" value="Good" id="q13">
        Good</label>
      
      <label>
        <input type="radio" name="q13" value="Average" id="q13">
        Average</label>
      
      <label>
        <input type="radio" name="q13" value="Unsatisfactory" id="q13">
        Unsatisfactory</label>
      <br>
      </td>
  </tr>
   <tr>
    <th height="85" scope="row">->  The teachers take efforts to enhance employability skills in the students.*</th><br> 
    <td>
      <label>
        <input type="radio" name="q14" value="Excellent" id="q14" required/>
        Excellent</label>
      
      <label>
        <input type="radio" name="q14" value="Very Good" id="q14">
        Very Good</label>
      
      <label>
        <input type="radio" name="q14" value="Good" id="q14">
        Good</label>
      
      <label>
        <input type="radio" name="q14" value="Average" id="q14">
        Average</label>
      
      <label>
        <input type="radio" name="q14" value="Unsatisfactory" id="q14">
        Unsatisfactory</label>
      <br>
      </td>
  </tr>
   <tr>
    <th height="105" scope="row">->  The teachers encourage the students to participate in extra-curricular,co-curricular activites and research projects.*</th><br> 
    <td>
      <label>
        <input type="radio" name="q15" value="Excellent" id="q15" required/>
        Excellent</label>
      
      <label>
        <input type="radio" name="q15" value="Very Good" id="q15">
        Very Good</label>
      
      <label>
        <input type="radio" name="q15" value="Good" id="q15">
        Good</label>
      
      <label>
        <input type="radio" name="q15" value="Average" id="q15">
        Average</label>
      
      <label>
        <input type="radio" name="q15" value="Unsatisfactory" id="q15">
        Unsatisfactory</label>
      <br>
      </td>
  </tr>
   <tr>
    <th height="101" scope="row">->  The teachers encourage the students the students to use reference books,e-resource,e-journals,etc.*</th><br> 
    <td>
      <label>
        <input type="radio" name="q16" value="Excellent" id="q16" required/>
        Excellent</label>
      
      <label>
        <input type="radio" name="q16" value="Very Good" id="q16">
        Very Good</label>
      
      <label>
        <input type="radio" name="q16" value="Good" id="q16">
        Good</label>
      
      <label>
        <input type="radio" name="q16" value="Average" id="q16">
        Average</label>
      
      <label>
        <input type="radio" name="q16" value="Unsatisfactory" id="q16">
        Unsatisfactory</label>
      <br>
     </td>
  </tr>
   <tr>
     <th height="100" scope="row">->  The teachers keep the students update about the latest development in the subject/area of knowledge.*</th><br> 
     <td>
       <label>
         <input type="radio" name="q17" value="Excellent" id="q17" required/>
        Excellent</label>
       
       <label>
         <input type="radio" name="q17" value="Very Good" id="q17">
        Very Good</label>
       
       <label>
         <input type="radio" name="q17" value="Good" id="q17">
        Good</label>
       
       <label>
         <input type="radio" name="q17" value="Average" id="q17">
        Average</label>
       
       <label>
         <input type="radio" name="q17" value="Unsatisfactory" id="q17">
        Unsatisfactory</label>
       <br>
      </td>
   </tr>
   <tr>
     <th scope="row">->  The teachers take active interest int arranging field visits,study tours for enhacing learning.*</th><br> 
     <td>
       <label>
         <input type="radio" name="q18" value="Excellent" id="q18" required/>
        Excellent</label>
       
       <label>
         <input type="radio" name="q18" value="Very Good" id="q18">
        Very Good</label>
       
       <label>
         <input type="radio" name="q18" value="Good" id="q18">
        Good</label>
       
       <label>
         <input type="radio" name="q18" value="Average" id="q18">
        Average</label>
       
       <label>
         <input type="radio" name="q18" value="Unsatisfactory" id="q18">
        Unsatisfactory</label>
       <br>
      </td>
      </tr>
      <tr>
    <th colspan="2" scope="row"><label>
      <input type="submit" name="s1" id="s1" value="Submit Feedback">
    </label></th>
    </tr>
   </tr>
  </table>
  </form>
</body>
</html>