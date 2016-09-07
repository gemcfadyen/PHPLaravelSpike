<?php

  namespace App\Http\Controllers;
  use Illuminate\Http\Request;
  use App\Http\Requests;

  class PagesController extends Controller {
    public function home() {
      $people = ['Georgina', 'Catherine'];
      return view('welcome')->withPeople($people);
    }

    public function about() {
      return view('pages.about');
    }

    public function performance() {
     return "{\r\n  \"coordinates\": null,\r\n  \"created_at\": \"Thu Oct 21 16:02:46 +0000 2010\",\r\n  \"favorited\": false,\r\n  \"truncated\": false,\r\n  \"id_str\": \"28039652140\",\r\n  \"entities\": {\r\n    \"urls\": [\r\n      {\r\n        \"expanded_url\": null,\r\n        \"url\": \"http:\/\/gnip.com\/success_stories\",\r\n        \"indices\": [\r\n          69,\r\n          100\r\n        ]\r\n      }\r\n    ],\r\n    \"hashtags\": [\r\n\r\n    ],\r\n    \"user_mentions\": [\r\n      {\r\n        \"name\": \"Gnip, Inc.\",\r\n        \"id_str\": \"16958875\",\r\n        \"id\": 16958875,\r\n        \"indices\": [\r\n          25,\r\n          30\r\n        ],\r\n        \"screen_name\": \"gnip\"\r\n      }\r\n    ]\r\n  },\r\n  \"in_reply_to_user_id_str\": null,\r\n  \"text\": \"what we\'ve been up to at @gnip -- delivering data to happy customers http:\/\/gnip.com\/success_stories\",\r\n  \"contributors\": null,\r\n  \"id\": 28039652140,\r\n  \"retweet_count\": null,\r\n  \"in_reply_to_status_id_str\": null,\r\n  \"geo\": null,\r\n  \"retweeted\": false,\r\n  \"in_reply_to_user_id\": null,\r\n  \"user\": {\r\n    \"profile_sidebar_border_color\": \"C0DEED\",\r\n    \"name\": \"Gnip, Inc.\",\r\n    \"profile_sidebar_fill_color\": \"DDEEF6\",\r\n    \"profile_background_tile\": false,\r\n    \"profile_image_url\": \"http:\/\/a3.twimg.com\/profile_images\/62803643\/icon_normal.png\",\r\n    \"location\": \"Boulder, CO\",\r\n    \"created_at\": \"Fri Oct 24 23:22:09 +0000 2008\",\r\n    \"id_str\": \"16958875\",\r\n    \"follow_request_sent\": false,\r\n    \"profile_link_color\": \"0084B4\",\r\n    \"favourites_count\": 1,\r\n    \"url\": \"http:\/\/blog.gnip.com\",\r\n    \"contributors_enabled\": false,\r\n    \"utc_offset\": -25200,\r\n    \"id\": 16958875,\r\n    \"profile_use_background_image\": true,\r\n    \"listed_count\": 23,\r\n    \"protected\": false,\r\n    \"lang\": \"en\",\r\n    \"profile_text_color\": \"333333\",\r\n    \"followers_count\": 260,\r\n    \"time_zone\": \"Mountain Time (US & Canada)\",\r\n    \"verified\": false,\r\n    \"geo_enabled\": true,\r\n    \"profile_background_color\": \"C0DEED\",\r\n    \"notifications\": false,\r\n    \"description\": \"Gnip makes it really easy for you to collect social data for your business.\",\r\n    \"friends_count\": 71,\r\n    \"profile_background_image_url\": \"http:\/\/s.twimg.com\/a\/1287010001\/images\/themes\/theme1\/bg.png\",\r\n    \"statuses_count\": 302,\r\n    \"screen_name\": \"gnip\",\r\n    \"following\": false,\r\n    \"show_all_inline_media\": false\r\n  },\r\n  \"in_reply_to_screen_name\": null,\r\n  \"source\": \"web\",\r\n  \"place\": null,\r\n  \"in_reply_to_status_id\": null\r\n}";
    }
  }
