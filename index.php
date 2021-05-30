<?php 
   header('Content-Type: text/html;charset=utf-8');
/*   
   $news_item_url
   $news_item_text
*/
   $arr_files = Array(
      'ivolga_text_constants_rus.php',
      'ivolga_text_constants_eng.php',
      'ivolga_text_constants_chinese.php',
      'ivolga_text_constants_empty_str.php',
      'ivolga_text_constants_short_str.php'
   );

   require_once($arr_files[4]);

   $MAX_HEADLINE_LEN = 180;
   $news_item_headline = substr($news_item_text, 0, $MAX_HEADLINE_LEN-1);

   $split_idx = 0;
   if (preg_match('/\S+\s+\S+\s*$/', $news_item_headline, $matches, PREG_OFFSET_CAPTURE))
      $split_idx = $matches[0][1];

   $news_item_headline_text_part = substr($news_item_headline, 0, $split_idx);
   $news_item_headline_anchor_part = substr($news_item_headline,  $split_idx);

   
   # do not trust anyone! :-)
   $news_item_headline_text_part = htmlentities($news_item_headline_text_part);
   $news_item_headline_anchor_part = htmlentities($news_item_headline_anchor_part);

   $dots = '...';
   $news_item_headline = "${news_item_headline_text_part}<a href=\"${news_item_url}\">${news_item_headline_anchor_part}${dots}</a>";

   print $news_item_headline;