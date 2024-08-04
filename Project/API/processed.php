<?php
include_once('api-countries.php');
include_once('api-disciplines.php');
include_once('api-events-competitor.php');
include_once('api-events-date.php');
include_once('api-events-football.php');
include_once('api-events.php');
include_once('api-venues.php');


//Question 1
$country= $data_events['data'][4]['competitors'][0]['competitor_name'];

//Question 2
$start= $data['data'][0]['day'];

//Question 3
$first= $data_countries['data'][0]['name'];
$second= $data_countries['data'][1]['name'];
$third= $data_countries['data'][2]['name'];
$podium= "$first, $second, $third";

//Question 4
$venue= $data_venues['data'][29]['name'];

//Question 5
$sport= $data_disciplines['data'][9]['name'];

//Question 6
$silver_medals = $data_countries['data'][0]['silver_medals'];

//Question 7
$total_sports = count($data_disciplines['data']);

//Question 8
$winner1= $data_football['data'][2]['competitors'][2]['country_id'];
$winner2= $data_football['data'][3]['competitors'][3]['country_id'];
$winner3= $data_football['data'][4]['competitors'][2]['country_id'];
$winner4= $data_football['data'][5]['competitors'][4]['country_id'];
$winners= "$winner1, $winner2, $winner3, $winner4";

//Question 9
$total_countries= $data_countries['meta']['total'];

//Question 10
$competitor1= $data_competitor['data'][0]['competitors'][11]['competitor_name'];
$competitor2= $data_competitor['data'][0]['competitors'][4]['competitor_name'];
$competitor3= $data_competitor['data'][1]['competitors'][7]['competitor_name'];
$competitor_winn= "$competitor1, $competitor2, $competitor3";

?>