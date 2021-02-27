<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php $data ?></title>
    <style>
		
	div {
            border-radius: 5px;		
            padding: 20px 10px;		
            }
	/*Personal style*/	
	.personalDiv,.contactDiv{
            width:300px;	/*two buttons on line*/		
            text-align: center;		/*two buttons on line*/	
	}

	/*general style*/	
	.showNote{
            border-radius: 5px;		
            padding: 20px 10px;		
            width:130px;		
	}
	.logout{
            border-radius: 5px;		
            padding: 20px 10px;		
            margin-bottom: 5px;
            float: right; 
            width: 130px;
	}
	.showNote button{
            font-family: "Roboto", sans-serif;
            text-transform: uppercase;
            outline: 0;
            background: #4CAF50;
            width: 130px;
            border-radius: 5px;
            border: none;		
            color: #FFFFFF;
            font-size: 14px;		
            cursor: pointer;
            margin: 1px;
	}	
	.logout button{
            font-family: "Roboto", sans-serif;
            text-transform: uppercase;
            outline: 0;
            border-radius: 5px;
            border: none;
            width: 130px;
            background-color: red;
            font-size: 14px;		
            cursor: pointer;
            margin: 1px;
	}

	/*Regestration style*/
	.action_page {
            margin: auto;
            width:550px;
	}
	/*Home style*/
	.home{	
            margin-left: 750px;
            width:300px;	/*two buttons on line*/		
            text-align: center;		/*two buttons on line*/	
	}
	/*general style*/			
	/*two buttons on line*/	
	input[type=button].logbtn
	{
            background-color: #ffa500;
            float: left; 
            width: 130px;
	}
	input[type=button].regbtn
	{		
            float: right; 
            width: 130px;
	}

	input[type=submit].delete{
            background-color: #ff0000;
	} 

	/*Home style*/
	.homeDelet{
            display: none;
	}
        .noHomePage{
             display: none;
        }
	.homePage{
            width: 280px;	/*two buttons on line*/		
            text-align: center;		/*two buttons on line*/	
	 }
	 .homePage .logout{
            width:300px;	/*two buttons on line*/		
            text-align: center;		/*two buttons on line*/	
	 }
	 .homePage .showNote{
            width:220px;	/*two buttons on line*/		
            text-align: center;		/*two buttons on line*/	
	 }
		/*Login style*/	
	/*@import url(https://fonts.googleapis.com/css?family=Roboto:300);*/

	.login-page {
            width: 460px;
            padding: 8% 0 0;
            margin: auto;
	}
	.form {
            position: relative;
            z-index: 1;
            background: #FFFFFF;
            max-width: 460px;
            margin: 0 auto 100px;
            padding: 45px;
            text-align: center;
            box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
		}
	.form input {
            font-family: "Roboto", sans-serif;
            outline: 0;
            background: #f2f2f2;
            width: 50%;
            border: 0;
            margin: 0 0 15px;
            padding: 15px;
            box-sizing: border-box;
            font-size: 14px;
	}
        .form button {
            font-family: "Roboto", sans-serif;
            text-transform: uppercase;
            outline: 0;
            background: #4CAF50;
            width: 100%;
            border: 0;
            padding: 15px;
            color: #FFFFFF;
            font-size: 14px;
            -webkit-transition: all 0.3 ease;
            transition: all 0.3 ease;
            cursor: pointer;
	}
        .form button:hover,.form button:active,.form button:focus {
            background: #43A047;
	}

	/* Registaration style*/
	input[type=text], input[type=email], input[type=password]  {
            width: 50%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;		
	}
	input[type=text] #docketTi{
            width: 10px;
	}
	input.userStyle{		
            font-size:16px;
            font-family:Arial, Helvetica, sans-serif;
            border: none;
            margin-left: 0px;
            padding-left:0px;
	}
	input[type=submit], input[type=button] {
            width: 75%;
            background-color: #4CAF50;
            color: white;
            padding: 5px 20px;
            margin: 8px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }	
	/*Table style*/
	table {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse; 		
	}	
	td, th {
            border: 1px solid #ddd;
            padding: 8px;
	}
	tr:nth-child(even) {
            background-color: #dddddd;
	}
	tr:hover {
            background-color: #ddd;
	}
	th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: center;
            background-color: #4CAF50;
            color: white;		 
    }	
	 /*User Name*/
	.notePage{
            width:300px;	/*two buttons on line*/		
            text-align: center;		/*two buttons on line*/	
	 }
	a{
            position:relative; 
            float: left; 
            width: 130px;
	}	
	/*Note */
	div#input_form .docketTi{
            width: 250px;
	} 
	div#input_form .docket{
            width: 400px;
	}	
	</style>
</head>
<body>
    
