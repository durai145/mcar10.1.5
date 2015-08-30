<?php


include('config.php');

// table name 
$tbl_name="uss_identity";

$page="getStmtDesc.php";
// Random confirmation code 
$confirm_code=md5(uniqid(rand())); 

// values sent from form 
$GROUPID=$_POST['GROUPID'];
$USRID=$_POST['USRID'];
$STMTID=$_POST['STMTID'];
$DEBUG=$_POST['DEBUG'];

//$DEBUG=1;


if ($DEBUG == 1)
{

echo("<pre>\n");
print_r($_POST);
echo("</pre>\n");

}


//echo  "GROUPID  =  [".$GROUPID ."]";
//echo  "USRID  =  [".$USRID ."]";
$result=false;


// Insert data into database 


function logerr($USRID,$page,$err_code, $err_desc, $error_text)
{

//	$sql="INSERT INTO db_errors (paerror_page,error_text,err_code,err_desc) VALUES ( '" . $page . " ','" .escape_data($error_text). "', '" . $err_code . " ', ' " . $err_desc ."')" ; 

$sql ="INSERT INTO db_errors (error_page,err_code,error_text,err_desc,maker_id,MODIFIED_DT) VALUES ( \"" . $page . "\",\"" . $err_code  . "\",\"" . $error_text . "\" , \"" . $err_desc . "\" , " . $USRID ." , sysdate())" ;

	echo "<br> $sql </br>";

	mysql_query($sql);

	mysql_error();
	if (mysql_errno()) 
	{ 
		$error = "$sql"; 
		echo $error;
	} 


return 0;

}


function getCount($USRID,$sql,$page,$err_desc)
{


	$result=mysql_query($sql);
	if (mysql_errno()) 
	{ 

		logerr($USRID,$page, mysql_errno(),  mysql_error(), $sql);
		return -1;
	} 
	else
	{

		$row = mysql_fetch_row($result);
		$record=count($row);
		$count=$row[0];


	}



return $count;
}




function insertQry($USRID,$sql,$page,$err_desc)
{

	$rtCount=0;
	
	$result=mysql_query($sql);
	if (mysql_errno()) 
	{ 

		logerr($USRID,$page, mysql_errno(),  mysql_error(), $sql);
		return -1;
	} 
	else
	{

	$rtCount=0;

	}




return 0;

}

function getSelectArray($USRID,$sql,$page,$err_desc)
{
	$result=mysql_query($sql);
		if (mysql_errno()) 
	{ 

		logerr($USRID,$page, mysql_errno(),  mysql_error(), $sql);
		return -1;
	} 
	else
	{

	//$row = mysql_fetch_row($result);
	//$record=count($row);
	//echo "Record:$record  $row[0]\n";
	//$count=$row[0];

	return $result;


	}


	
}

function getUsrIds($USRID,$sql,$page,$err_desc,$STMTID)
{

//	echo "get Desc";

echo "";

$sql="select GRP_ID  GRPID , USR_ID from STMT001MB st , GID001TB gid where  st.GRP_ID = gid.GRP_ID and st.STMTID= '$STMTID' ";
$result=mysql_query($sql);

echo "";
for ($i=0; $i < mysql_num_fields($result); $i++) //Table Header
{ 
// print "<option selected='' value='C'> C-Card</option><option value='O'> O-ONLINE</option>";

while ($row = mysql_fetch_row($result)) 
{ //Table body


echo "<option value='$row[0]' >$row[1] </option> ";

}


}
echo "</select>";
echo "</tdf>";
}


function getDesc($GROUPID)
{

//	echo "get Desc";

echo "";

$sql="select stmt_id , descr from STMT001MB where status = 'A' and GRP_ID= '$GROUPID' ";
$result=mysql_query($sql);

echo "<select datatype='LIST' name='homespace_StmtMonth' xmlname='StmtMonth' id='StmtMonth' xml='N' parent='homespace' class='ctext' value='C' mndf='Y' label='Statement' onchange='javascript:onChange(this);' onkeydown='javascript:onKeyDown(this);' onkeypress='javascript:onKeyPress(this);' onkeyup='javascript:onKeyUp(this);'>";
for ($i=0; $i < mysql_num_fields($result); $i++) //Table Header
{ 
// print "<option selected='' value='C'> C-Card</option><option value='O'> O-ONLINE</option>";

while ($row = mysql_fetch_row($result)) 
{ //Table body


echo "<option value='$row[0]' >$row[1] </option> ";

}


}
echo "</select>";
echo "</tdf>";
}

if ($DEBUG == 1)
{
	echo "<br>DEBUG is started";


}


if ( $USRID   != "" &&  $STMTID != ""  && $GROUPID != "" )
{





//	$sql="SELECT COUNT(1)  FROM STMT001MB WHERE STMT_ID = " . $STMTID . " and GRP_ID = " .  $GROUPID ;
	$sql="SELECT COUNT(1)  FROM STMT001MB WHERE STMT_ID = " . $STMTID . " and GRP_ID = " .  $GROUPID ;


	if ($DEBUG == 1)
	{
		echo "<br>V:002: {$sql}";
	}
	$count=getCount($USRID,$sql,$page,"Validate STMTID");
	if ($DEBUG == 1)
	{
		echo "<br>V:003: {$sql}";
		echo "count=[" . $count . "]";
	}

	if ( $count != 0 )
	{

		$sql="select usr_id from GID001TB where grp_id=" .  $GROUPID ;
		if ($DEBUG == 1)
		{
			echo "V:004: {$sql}";
		}
		$groupList=getSelectArray($USRID,$sql,$page,$err_desc);



		for ($i=0; $i < mysql_num_fields($groupList); $i++) //Table Header
		{ 

			while ($row = mysql_fetch_row($groupList)) 
			{ 

				if ($DEBUG == 1)
				{
					echo "row [0]=[". $row[0] . "]";

	
				}
				$fusrid= $row[0];

				$sql="SELECT COUNT(1)  FROM STMT002MB WHERE STMT_ID = " . $STMTID . " and USR_ID = ". $fusrid ;


				if ($DEBUG == 1)
				{
				echo "<br>V:005: {$i }#{$sql}";
				}
				$count=getCount($USRID,$sql,$page,"Validate STMTID");
				if ($DEBUG == 1)
				{
				echo "<br>count=[" . $count . "]";
				}

				if ( $count == 0 )
				{

					$sql="INSERT INTO STMT002MB (grp_id,stmt_id,usr_id,mon_bal,mon_spnd,descr, CREATED_DT, MAKER_ID , MODIFIED_DT, AUTH_ID)VALUES('$GROUPID'," . $STMTID . " ,". $fusrid ." ,0,0,upper(DATE_FORMAT(sysdate(),'%b_%Y')),  sysdate(), $USRID, sysdate(),$USRID)";

						if ($DEBUG == 1)
						{
							echo "<br>V:007:{$i }# {$sql}";
						}

						if(insertQry($USRID,$sql,$page,"Insert Monthly Bal")!= 0)	
						{
							echo "System Error :STMTMONBAL0001";

						}

				}

				$sql=" update  STMT002MB gid set gid.mon_bal = (  select sum( (  case DR_CR_FLG  When  'C' then   tran_amt        else   tran_amt* -1 end  ) ) 
from TRN003MB t,  GTRN002MB  gt  where t.usr_id=  gid.usr_id  and gt.GTXN_TXN_ID = t.TBKT_TXN_ID  and t.usr_id = gid.usr_id  and gid.stmt_id = gt.stmt_id ) where gid.grp_id= ".$GROUPID . " ";
			if ( insertQry($USRID,$sql,$page,"Update Cur Bal")  != 0 )
			{
				echo "System Error :STMTMONBAL0002";
			}


			

			}


		}


		
	
	}
	else
	{
	
}

}
else {
echo "Requires Fieds are missing";
}
?>
