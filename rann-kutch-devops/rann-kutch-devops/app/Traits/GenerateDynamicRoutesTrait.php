<?php

namespace App\Traits;

use App\Destination;
use App\Models\Airport;
use App\Models\LocalCity;
use App\Models\Sightseeing;
use App\Models\Source;
use App\Models\TourCategory;
use App\Models\TourPackage;
use App\Models\Trip;
use DB;
use Route;
use App\Models\SocialMedium;

trait GenerateDynamicRoutesTrait {
    //Generate routes for tripes
    // public function generate_dynamic_social_media_routes() {
    //     $strRoutes = "";
    //     $strFooter = "";
    //     $socialMedia = SocialMedium::all();

    //     if(count($socialMedia) > 0){
    //         foreach($socialMedia as $social){
    //             $strRoutes = $strRoutes . '<li><a href="'.$social['url'].'" target="_blank" title="'.$social['title'].'"><i class="'.$social['identifier'].'"></i></a></li>' . "\r\n";
    //             $strFooter = $strFooter . '<li><a href="'.$social['url'].'" target="_blank" class="'.$social['identifier'].'" data-toggle="tooltip" data-placement="top" title="'.$social['title'].'"></a></li>' . "\r\n";
    //         }
    //     }

    //     $strRoutes = trim($strRoutes);
    //     $strFooter = trim($strFooter);
    //     $fp = fopen("../resources/views/partials/front/social.blade.php","w+");
    //     if (!is_resource($fp)) { // Test if PHP could open the file
    //        // echo "Could not open for writting.";
    //        // exit;
    //     }
    //     $fwrite = fwrite($fp,$strRoutes);
    //     if(!$fwrite){
    //         //dd('No updated..!');
    //     } else {
    //        // dd($strRoutes);
    //     }

    //     fclose($fp);


    //     $fps = fopen("../resources/views/partials/front/footer-social.blade.php","w+");
    //     if (!is_resource($fps)) { // Test if PHP could open the file
    //         // echo "Could not open for writting.";
    //         // exit;
    //     }
    //     $fwrites = fwrite($fps,$strFooter);
    //     if(!$fwrites){
    //         //dd('No updated..!');
    //     } else {
    //         // dd($strRoutes);
    //     }

    //     fclose($fps);
    // }

    // public function generate_dynamic_trip_routes() {
    //     $strRoutes = "<?php" . "\r\n";
    //     $strSpRoutes = "<?php" . "\r\n";
    //     $tripList = Trip::all();

    //     $arrData = config('settings.pages');

    //     if(count($tripList) > 0){
    //         foreach($tripList as $trip){
    //             if(in_array($trip->slug,$arrData)){
    //                 $strSpRoutes = $strSpRoutes . " Route::get('".$trip->slug ."', 'Front\BookRideController@sp_my_trip'); ". "\r\n";
    //             }
    //             else{
    //                 $strRoutes = $strRoutes . " Route::get('".$trip->slug ."', 'Front\BookRideController@my_trip'); ". "\r\n";
    //             }
    //         }
    //     }

    //     $strRoutes = trim($strRoutes);
    //     $strSpRoutes = trim($strSpRoutes);
    //     $fp = fopen("../routes/dynamic_trip_routes.php","w+");
    //     if (!is_resource($fp)) { // Test if PHP could open the file
    //         // echo "Could not open for writting.";
    //         // exit;
    //     }
    //     $fwrite = fwrite($fp,$strRoutes);
    //     if(!$fwrite){
    //         //dd('No updated..!');
    //     } else {
    //         // dd($strRoutes);
    //     }

    //     fclose($fp);

    //     $fps = fopen("../routes/dynamic_trip_routes_special.php","w+");
    //     if (!is_resource($fps)) { // Test if PHP could open the file
    //         // echo "Could not open for writting.";
    //         // exit;
    //     }
    //     $fwrites = fwrite($fps,$strSpRoutes);
    //     if(!$fwrites){
    //         //dd('No updated..!');
    //     } else {
    //         // dd($strRoutes);
    //     }

    //     fclose($fps);
    // }

    public function generate_main_sitemap(){
        //$destinationList = Destination::all();
        $strRoutes = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>" . "\r\n";
        $strRoutes .= "<sitemapindex xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">" . "\r\n";
        for($i=0; $i<=7; $i++){
            $singleURL = "<sitemap>". "\r\n";
            $singleURL .= "<loc>https://rannofkutchtaxi.com/sitemap/sitemap-".$i.".xml</loc>". "\r\n";
            $singleURL .= "<lastmod>".date("Y-m-d")."T10:51:05+00:00</lastmod>". "\r\n";
            $singleURL .= "</sitemap>". "\r\n";
            $strRoutes .= $singleURL;
        }
        $strRoutes .= "</sitemapindex>" . "\r\n";

        $strRoutes = trim($strRoutes);
        $fp = fopen("../public/sitemap.xml","w+");
        if (!is_resource($fp)) { // Test if PHP could open the file
            // echo "Could not open for writting.";
            // exit;
        }
        $fwrite = fwrite($fp,$strRoutes);
        if(!$fwrite){
            //dd('No updated..!');
        } else {
            // dd($strRoutes);
        }

        fclose($fp);
    }

    public function generate_xml_routes() {
        $destinationList = Source::all()->chunk(34);
        foreach($destinationList as $keyData => $valueData){
            $strRoutes = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>" . "\r\n";
            $strRoutes .= "<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\" xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\" xsi:schemaLocation=\"http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd\">" . "\r\n";
            foreach($valueData as $keyRoute => $valueRoute){

                $tripList = Trip::where("source_id","=",$valueRoute['id'])->get();

                if(count($tripList) > 0){
                    foreach($tripList as $keyTrip => $trip){
                        $singleURL = "<url>". "\r\n";
                        $singleURL .= "<loc>https://rannofkutchtaxi.com/".$trip['slug']."</loc>". "\r\n";
                        $singleURL .= "<lastmod>".date('Y-m-d')."T11:53:36Z</lastmod>". "\r\n";
                        $singleURL .= "<changefreq>daily</changefreq>". "\r\n";
                        $singleURL .= "<priority>1.0</priority>". "\r\n";
                        $singleURL .= "</url>". "\r\n";
                        $strRoutes .= $singleURL;
                    }
                }
            }
            $strRoutes .= "</urlset>" . "\r\n";

            $strRoutes = trim($strRoutes);
            $fp = fopen("../public/sitemap/sitemap-".$keyData + 1 .".xml","w+");
            if (!is_resource($fp)) { // Test if PHP could open the file
                // echo "Could not open for writting.";
                // exit;
            }
            $fwrite = fwrite($fp,$strRoutes);
            if(!$fwrite){
                //dd('No updated..!');
            } else {
                // dd($strRoutes);
            }

            fclose($fp);
        }
    }

    /* public function generate_other_page() {
        $strRoutes = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>" . "\r\n";
        $strRoutes .= "<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\" xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\" xsi:schemaLocation=\"http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd\">" . "\r\n";
        $singleURL = "";

        $TourPackage = TourPackage::all();
        $TourCategory = TourCategory::all();
        $Sightseeing = Sightseeing::all();
        $LocalCity = LocalCity::all();
        $Airport = Airport::all();

        foreach($TourPackage as $keyData => $valueData){
            $singleURL .= "<url>". "\r\n";
            $singleURL .= "<loc>https://www.gogacab.in/tour-package/".$valueData->tour_category->slug."/".$valueData['slug']."</loc>". "\r\n";
            $singleURL .= "<lastmod>".date('Y-m-d')."T11:53:36Z</lastmod>". "\r\n";
            $singleURL .= "<changefreq>daily</changefreq>". "\r\n";
            $singleURL .= "<priority>1.0</priority>". "\r\n";
            $singleURL .= "</url>". "\r\n";
        }
        foreach($TourCategory as $keyData => $valueData){
            $singleURL .= "<url>". "\r\n";
            $singleURL .= "<loc>https://www.gogacab.in/tour-package/".$valueData['slug']."</loc>". "\r\n";
            $singleURL .= "<lastmod>".date('Y-m-d')."T11:53:36Z</lastmod>". "\r\n";
            $singleURL .= "<changefreq>daily</changefreq>". "\r\n";
            $singleURL .= "<priority>1.0</priority>". "\r\n";
            $singleURL .= "</url>". "\r\n";
        }
        foreach($Sightseeing as $keyData => $valueData){
            $singleURL .= "<url>". "\r\n";
            $singleURL .= "<loc>https://www.gogacab.in/sightseeing/".$valueData['slug']."</loc>". "\r\n";
            $singleURL .= "<lastmod>".date('Y-m-d')."T11:53:36Z</lastmod>". "\r\n";
            $singleURL .= "<changefreq>daily</changefreq>". "\r\n";
            $singleURL .= "<priority>1.0</priority>". "\r\n";
            $singleURL .= "</url>". "\r\n";
        }
        foreach($LocalCity as $keyData => $valueData){
            $singleURL .= "<url>". "\r\n";
            $singleURL .= "<loc>https://www.gogacab.in/local-taxi/".$valueData['slug']."</loc>". "\r\n";
            $singleURL .= "<lastmod>".date('Y-m-d')."T11:53:36Z</lastmod>". "\r\n";
            $singleURL .= "<changefreq>daily</changefreq>". "\r\n";
            $singleURL .= "<priority>1.0</priority>". "\r\n";
            $singleURL .= "</url>". "\r\n";
        }
        foreach($Airport as $keyData => $valueData){
            $singleURL .= "<url>". "\r\n";
            $singleURL .= "<loc>https://www.gogacab.in/airport/".$valueData['slug']."</loc>". "\r\n";
            $singleURL .= "<lastmod>".date('Y-m-d')."T11:53:36Z</lastmod>". "\r\n";
            $singleURL .= "<changefreq>daily</changefreq>". "\r\n";
            $singleURL .= "<priority>1.0</priority>". "\r\n";
            $singleURL .= "</url>". "\r\n";
        }

        //dd($singleURL);
        $strRoutes .= $singleURL;
        $strRoutes .= "</urlset>" . "\r\n";

        $strRoutes = trim($strRoutes);
        $fp = fopen("../public/sitemap/sitemap-28.xml","w+");
        if (!is_resource($fp)) { // Test if PHP could open the file
            // echo "Could not open for writting.";
            // exit;
        }
        $fwrite = fwrite($fp,$strRoutes);
        if(!$fwrite){
            //dd('No updated..!');
        } else {
            // dd($strRoutes);
        }

        fclose($fp);
    } */
}
