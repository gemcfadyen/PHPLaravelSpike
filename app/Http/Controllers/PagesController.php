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
      return response()->json( [
  "coordinates" => null,
  "created_at" => "Thu Oct 21 16:02:46 +0000 2010",
  "favorited" => false,
  "truncated" => false,
  "id_str" => "28039652140",
  "entities" => [
    "urls" => [
        "expanded_url" => null,
        "url" => "http://gnip.com/success_stories",
        "indices" => [
          69,
          100
        ]
    ],
    "hashtags" => [

    ],
    "user_mentions" => [
      [
        "name" => "Gnip, Inc.",
        "id_str" => "16958875",
        "id" => 16958875,
        "indices" => [
          25,
          30
        ],
        "screen_name" => "gnip"
      ]
    ]
  ],
  "in_reply_to_user_id_str" => null,
  "text" => "what we've been up to at @gnip -- delivering data to happy customers http://gnip.com/success_stories",
  "contributors" => null,
  "id" => 28039652140,
  "retweet_count" => null,
  "in_reply_to_status_id_str" => null,
  "geo" => null,
  "retweeted" => false,
  "in_reply_to_user_id" => null,
  "user" => [
    "profile_sidebar_border_color" => "C0DEED",
    "name" => "Gnip, Inc.",
    "profile_sidebar_fill_color" => "DDEEF6",
    "profile_background_tile" => false,
    "profile_image_url" => "http://a3.twimg.com/profile_images/62803643/icon_normal.png",
    "location" => "Boulder, CO",
    "created_at" => "Fri Oct 24 23:22:09 +0000 2008",
    "id_str" => "16958875",
    "follow_request_sent" => false,
    "profile_link_color" => "0084B4",
    "favourites_count" => 1,
    "url" => "http://blog.gnip.com",
    "contributors_enabled" => false,
    "utc_offset" => -25200,
    "id" => 16958875,
    "profile_use_background_image" => true,
    "listed_count" => 23,
    "protected" => false,
    "lang" => "en",
    "profile_text_color" => "333333",
    "followers_count" => 260,
    "time_zone" => "Mountain Time (US & Canada)",
    "verified" => false,
    "geo_enabled" => true,
    "profile_background_color" => "C0DEED",
    "notifications" => false,
    "description" => "Gnip makes it really easy for you to collect social data for your business.",
    "friends_count" => 71,
    "profile_background_image_url" => "http://s.twimg.com/a/1287010001/images/themes/theme1/bg.png",
    "statuses_count" => 302,
    "screen_name" => "gnip",
    "following" => false,
    "show_all_inline_media" => false
  ],
  "in_reply_to_screen_name" => null,
  "source" => "web",
  "place" => null,
  "in_reply_to_status_id" => null
]);
    }
  }
