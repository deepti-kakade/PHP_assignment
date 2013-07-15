<?php error_reporting(E_ALL);

function crawl_page($url, $depth)
{
    static $seen = array();
    if (isset($seen[$url]) || $depth === 0) {
        return;
    }
    $seen[$url] = true;
    $dom = new DOMDocument('1.0');
    @$dom->loadHTMLFile($url);
    $xpath = new DOMXPath($dom);
    $elements = $xpath ->query("//a[@class= 'catlinkstyle']/@href");
    echo "*******************************  Details **********************************\n";
    foreach ($elements as $element) {
        $href = $element->nodeValue;
        $dom1 = new DOMDocument('1.0');
        $url1 = "http://pune.quikr.com".$href;
        @$dom1->loadHTMLFile($url1);
        $xpath1 = new DOMXPath($dom1);
        $elements1 = $xpath1 ->query("//div[@id='category_partial_div']");
        foreach($elements1 as $element){
            //Find Category name
            print "<b>Category name:</b>".$element->nodeValue."\n";
            $sub_category_elements = $xpath1->query("//div[@id='subcategory_partial_div']");
            foreach($sub_category_elements as $element){
                //Find Sub Category
                print "<b>Sub Category name:</b>".$element->nodeValue."\n";
                $advertise_elements = $xpath1->query("//h2[@class = 'adtitlesnb']/a");
                //Find Advertise and its Links
                foreach($advertise_elements as $element2){
                    $href_of_advertise = $element2->getAttribute('href');
                    print " <b>Advertise:</b>".$element2->nodeValue."\n";
                    print "Address:".$href_of_advertise."\n";
                    print "<a href='$href_of_advertise'>Link<a/>"."\n";
                }
            }
        }
    }
}
crawl_page("http://pune.quikr.com/", 2);
?>