<?php
include_once 'conn.php';
  /**
   * 从数据库获取数据的借口文件
   * 2012-11-21 BY YQC  
   * 1.0
   */
  function getX(){
    $sql = "select `time` from `redata` where `username`='" . $_SESSION['username'] . "' order by `time`";
    $rel = mysql_query($sql);
    while($row=mysql_fetch_array($rel))
    {
      $tem[]="第".$row['time']."次";
    }
    echo json_encode($tem);
  }
  /**
   * 从数据库获取历次的统计数据
   * 2012-11-21 BY YQC
   * 1.0
  */
  function getY($tp){
    //获取平均数据
    $sql = "select `" . $tp ."` from `redata` where `username`='average' order by `time`";
    $rel = mysql_query($sql);
    while($row=mysql_fetch_array($rel))
    {
      $arr1[]=floatval($row[0]);
    }
    $rarr[]=array('name'=>"平均数据",'data'=>$arr1);
    //获取个人数据
    $sql = "select `" . $tp . "`,`time` from `redata` where `username`='" . $_SESSION['username'] . "' order by `time`";
    $rel = mysql_query($sql);
    $arr2=array(0,0,0);
    while($row=mysql_fetch_array($rel))
    {
      $arr2[intval($row[1])-1]=floatval($row[0]);
    }
    $rarr[]=array('name'=>"个人数据",'data'=>$arr2);
    echo json_encode($rarr);
  } 
  /**
   * 获取极性图
   * 2012-11-21 BY YQC
   * 1.0
  */
  function getNet($tp){
    $sql = "select * from `" . $tp ."` where `username`='" . $_SESSION['username'] . "'";
    $rel = mysql_query($sql);
    if($tp=="one")
    {
      if($row=mysql_fetch_array($rel))
      {
        $arr=array(floatval($row['waiqing']),floatval($row['yiren']),floatval($row['zeren']),floatval($row['shenjing']),floatval($row['kaifang']));
      }
      else
      {
        $arr=array(0,0,0,0,0);
      }
      $rarr[]=array('type'=>'area','name'=>"个人数据",'data'=>$arr);
      echo json_encode($rarr);
    }

    if($tp=="two")
    {
      if($row=mysql_fetch_array($rel))
      {
        $arr=array(floatval($row['ziwo']),floatval($row['jihua']),floatval($row['shehui']),floatval($row['guihua']),floatval($row['jiating']),floatval($row['ziyuan']));
      }
      else
      {
        $arr=array(0,0,0,0,0,0);
      }
      $rarr[]=array('type'=>'area','name'=>"个人数据",'data'=>$arr);
      echo json_encode($rarr);
    }

    if($tp=="three")
    {
      if($row=mysql_fetch_array($rel))
      {
        $arr=array(floatval($row['xuexiao']),floatval($row['jiating']),floatval($row['tongban']),floatval($row['shehui']));
      }
      else
      {
        $arr=array(0,0,0,0);
      }
      $rarr[]=array('type'=>'area','name'=>"个人数据",'data'=>$arr);
      echo json_encode($rarr);
    }


  }
?>
