<?php
$domain = "aoz-artisans.fr"; //Enter your URL or Domain name to check back links

$url = "http://www.google.com/search?q=link%3A".$domain;

$file = file_get_contents($url);

if (!strstr($file,'did not match any documents')) {
$linksto = strstr($file,"of about "); 
$linksto = substr($linksto,strlen("of about")); 
$linksto = str_replace(strstr($linksto,''),'',$linksto); 
echo $linksto.' backlinks'; 
}else{ 
echo 'No backlinks'; 
} 
?>
<?php 
$domain = 'aoz-artisans.fr' ; // Your domain name to check backlinks. 
$url="http://ajax.googleapis.com/ajax/services/search/web?v=1.0&q=link:".$domain."&filter=0"; 
$ch=curl_init();  // cURL started here 
curl_setopt($ch, CURLOPT_URL, $url); 
curl_setopt($ch, CURLOPT_USERAGENT,$_SERVER['HTTP_USER_AGENT']); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); 
curl_setopt ($ch, CURLOPT_HEADER, 0); 
curl_setopt ($ch, CURLOPT_NOBODY, 0); 
curl_setopt($ch, CURLOPT_TIMEOUT, 30); 
$kv_json = curl_exec($ch); 
curl_close($ch); 
$results=json_decode($kv_json,true); 
if($results['responseStatus']==200) { 
echo  $results['responseData']['cursor']['resultCount']; 
} else { 
echo ' Sorry No reults ! ' ; 
} 
?>
<?php
$domain = 'aoz-artisans.fr' ; // Url of your desired site to check backlinks. 
$url="http://ajax.googleapis.com/ajax/services/search/web?v=1.0&q=site:".$domain."&filter=0"; 
$ch=curl_init(); 
curl_setopt($ch, CURLOPT_URL, $url); 
curl_setopt($ch, CURLOPT_USERAGENT,$_SERVER['HTTP_USER_AGENT']); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); 
curl_setopt ($ch, CURLOPT_HEADER, 0); 
curl_setopt ($ch, CURLOPT_NOBODY, 0); 
curl_setopt($ch, CURLOPT_TIMEOUT, 30); 
$kv_json = curl_exec($ch); 
curl_close($ch); 
$results=json_decode($kv_json,true); 
if($results['responseStatus']==200) { 
echo  $results['responseData']['cursor']['resultCount']; 
} else { 
echo ' Sorry No Back links were found in this site !' ; 
} 
?>
