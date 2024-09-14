<?php

include $_SERVER['DOCUMENT_ROOT'] . '/ini.inc';
include $_SERVER['DOCUMENT_ROOT'] . '/header.php';

?>

    <div class="contentbox pricingbox container w-80">
        <h1>Plans and pricing</h1>
        <div class="col-md-5">
            <div style="margin: 2rem 0 2rem 0">
                <ul class="row switchlineblock">
                    <li class="center col-md-6 col-sm-3 col-xs-12 payswitch active">
                        <a href="https://www.seobility.net/en/order/upgrade/?payinterval=1&amp;forcecurrency=EUR">Monthly payment</a>
                    </li>
                    <li style="position: relative" class="center col-md-6 col-sm-3 col-xs-12 payswitch ">
                        <a href="https://www.seobility.net/en/order/upgrade/?payinterval=12&amp;forcecurrency=EUR">Annual payment</a>
                        <span class="label label-success pull-right discountlabel">You save 30%</span>
                    </li>
                </ul>
            </div>
        </div>
        <table class="table" id="pricingtable">
            <tbody class="table-sticky">
            <tr>
                <th rowspan="2">
                    <strong>Plan/Account</strong>
                    <p>Please select your preferred plan</p>
                </th>
                <th class="greencoat">
                    Agency
                </th>
                <th class="bluecoat">
                    <div style="display: flex; flex-direction: column;">
                        <div class="badge most-fav-account">Most popular</div>
                        Premium
                    </div>
                </th>
                <th class="greycoat">
                    Basic
                </th>
            </tr>
            <tr>
                <td class="greencoat small teaser" data-th="Agency">For large websites, large companies &amp;
                    agencies.
                </td>
                <td class="bluecoat small teaser" data-th="Premium">
                    The best choice for small and mid-size businesses.
                </td>
                <td class="greycoat small teaser" data-th="Basic">Well suited for newbies and hobbyists.</td>
            </tr>

            <script>
                $(function () {
                    //Layout fixxes for bootstrap popover
                    $('td').css('padding', '');
                    $('.show-tooltip').css('padding', '');
                });
            </script>


            <tr>
                <td>
                    <strong>Price per month</strong>
                    <small><abbr title="plus value added tax">plus VAT</abbr></small><br>
                    <p>The contract is automatically renewed for another month at the end of each month. You can cancel
                        your subscription anytime without a cancelation period.
                    </p>
                </td>

                <td class="pricingcell" style="background-color: rgb(247, 247, 247);">
                    <span class="visible-xs">Agency</span>
                    <br class="visible-xs">
                    <span class="price">€179.90<br>
                        <small style="font-weight: normal;font-size: 70%;">monthly</small>
                    </span><br>

                    <a href="https://www.seobility.net/en/register/step2.do?productid=2&amp;payinterval=1&amp;currency=EUR"
                       class="btn btn-success">Sign Up Now
                    </a>
                </td>
                <td class="pricingcell bluecoat" style="background-color: rgb(223, 235, 253);">
                    <span class="visible-xs">Premium</span>
                    <br class="visible-xs">
                    <span class="price">14 Day Free Trial<br>
                        <small style="font-weight: normal;font-size: 70%;">€49.90 monthly afterwards</small>
                    </span><br>

                    <a href="https://www.seobility.net/en/register/step2.do?productid=1&amp;payinterval=1&amp;currency=EUR"
                       class="btn btn-success">Proceed to next step
                    </a>
                </td>
                <td class="pricingcell" style="vertical-align: middle; background-color: rgb(247, 247, 247);">
                    <span class="visible-xs">Basic</span>
                    <br class="visible-xs">
                    <span class="price" style="font-weight: 500;">Free</span>
                    <br>
                    <small>Your current account</small>
                </td>
            </tr>
            </tbody>

            <tbody class="pricing_spacing">
            <tr>
                <td colspan="4"><strong>Plans</strong></td>
            </tr>
            <tr>
                <td style="">
                    <div class="show-tooltip" data-trigger="hover" data-html="true" data-toggle="popover"
                         data-title="Included website projects"
                         data-content="Number of projects/domains you can manage in your account. You can add more projects at any time."
                         data-placement="right" data-original-title="" title="" style="">Included website projects <span
                                class="glyphicon glyphicon-info-sign"><i></i></span></div>
                </td>
                <td class="matrix" data-th="Agency" style="background-color: rgb(247, 247, 247);">15</td>
                <td class="matrix bluecoat !important" data-th="Premium" style="background-color: rgb(223, 235, 253);">
                    3
                </td>
                <td class="matrix" data-th="Basic" style="background-color: rgb(247, 247, 247);">1</td>
            </tr>
            <tr>
                <td style="">
                    <div class="show-tooltip" data-trigger="hover" data-html="true" data-toggle="popover"
                         data-title="Maximum analyzed web pages per crawl"
                         data-content="Number of pages that will be checked per project" data-placement="right"
                         data-original-title="" title="" style="">Maximum analyzed web pages per crawl <span
                                class="glyphicon glyphicon-info-sign"><i></i></span></div>
                </td>
                <td class="matrix" data-th="Agency" style="background-color: rgb(247, 247, 247);">100,000</td>
                <td class="matrix bluecoat !important" data-th="Premium" style="background-color: rgb(223, 235, 253);">
                    25,000
                </td>
                <td class="matrix" data-th="Basic" style="background-color: rgb(247, 247, 247);">1,000</td>
            </tr>
            <tr>
                <td style="">
                    <div class="show-tooltip" data-trigger="hover" data-html="true" data-toggle="popover"
                         data-title="Unlimited re-crawls"
                         data-content="The waiting time indicates how long you have to wait after a completed crawling, until a new crawl for this project can be started."
                         data-placement="right" data-original-title="" title="" style="">Unlimited re-crawls <span
                                class="glyphicon glyphicon-info-sign"><i></i></span></div>
                </td>
                <td class="matrix" data-th="Agency" style="background-color: rgb(247, 247, 247);"><span
                            class="glyphicon glyphicon-ok"><i></i></span></td>
                <td class="matrix bluecoat !important" data-th="Premium" style="background-color: rgb(223, 235, 253);">
                    <span class="glyphicon glyphicon-ok"><i></i></span></td>
                <td class="matrix" data-th="Basic" style="background-color: rgb(247, 247, 247);"><span
                            class="glyphicon glyphicon-remove"><i></i></span> wait three days
                </td>
            </tr>
            <tr>
                <td style="">
                    <div class="show-tooltip" data-trigger="hover" data-html="true" data-toggle="popover"
                         data-title="Included keywords"
                         data-content="Number of included keywords you can use for your projects per plan. Additional keywords can be ordered later."
                         data-placement="right" data-original-title="" title="" style="">Included keywords <span
                                class="glyphicon glyphicon-info-sign"><i></i></span></div>
                </td>
                <td class="matrix" data-th="Agency" style="background-color: rgb(247, 247, 247);">1,500</td>
                <td class="matrix bluecoat !important" data-th="Premium" style="background-color: rgb(223, 235, 253);">
                    300
                </td>
                <td class="matrix" data-th="Basic" style="background-color: rgb(247, 247, 247);">10</td>
            </tr>
            <tr>
                <td style="">
                    <div class="show-tooltip" data-trigger="hover" data-html="true" data-toggle="popover"
                         data-title="Amount of checked external links"
                         data-content="Maximum number of checked external links from your website"
                         data-placement="right" data-original-title="" title="" style="">Amount of checked external
                        links <span class="glyphicon glyphicon-info-sign"><i></i></span></div>
                </td>
                <td class="matrix" data-th="Agency" style="background-color: rgb(247, 247, 247);">50,000</td>
                <td class="matrix bluecoat !important" data-th="Premium" style="background-color: rgb(223, 235, 253);">
                    25,000
                </td>
                <td class="matrix" data-th="Basic" style="background-color: rgb(247, 247, 247);">100</td>
            </tr>
            <tr>
                <td style="">
                    <div class="show-tooltip" data-trigger="hover" data-html="true" data-toggle="popover"
                         data-title="Backlink analysis and monitoring"
                         data-content="The Seobility backlink dashboard provides an overview of the current development of backlinks for your domain along with the most important information on the backlink profile."
                         data-placement="right" data-original-title="" title="" style="">Backlink analysis and
                        monitoring <span class="glyphicon glyphicon-info-sign"><i></i></span></div>
                </td>
                <td class="matrix" data-th="Agency" style="background-color: rgb(247, 247, 247);"><span
                            class="glyphicon glyphicon-ok"><i></i></span></td>
                <td class="matrix bluecoat !important" data-th="Premium" style="background-color: rgb(223, 235, 253);">
                    <span class="glyphicon glyphicon-ok"><i></i></span></td>
                <td class="matrix" data-th="Basic" style="background-color: rgb(247, 247, 247);"><span
                            class="glyphicon glyphicon-remove"><i></i></span></td>
            </tr>
            <tr>
                <td style="">
                    <div class="show-tooltip" data-trigger="hover" data-html="true" data-toggle="popover"
                         data-title="Priority Support"
                         data-content="Support requests from users on the Premium or Agency plan will be handled with priority."
                         data-placement="right" data-original-title="" title="" style="">Priority Support <span
                                class="glyphicon glyphicon-info-sign"><i></i></span></div>
                </td>
                <td class="matrix" data-th="Agency" style="background-color: rgb(247, 247, 247);"><span
                            class="glyphicon glyphicon-ok"><i></i></span></td>
                <td class="matrix bluecoat !important" data-th="Premium" style="background-color: rgb(223, 235, 253);">
                    <span class="glyphicon glyphicon-ok"><i></i></span></td>
                <td class="matrix" data-th="Basic" style="background-color: rgb(247, 247, 247);"><span
                            class="glyphicon glyphicon-remove"><i></i></span></td>
            </tr>
            <tr>
                <td style="">
                    <div class="show-tooltip" data-trigger="hover" data-html="true" data-toggle="popover"
                         data-title="Tool requests per day (e.g. SEO Checker, TF-IDF Tool, Keyword Research Tool etc.)"
                         data-content="For all free tools, such as Keyword Research Tool, SEO Checker, Ranking Checker, TF*IDF Tool, etc. you have the respective number of calls per day available."
                         data-placement="right" data-original-title="" title="" style="">Tool requests per day (e.g. SEO
                        Checker, TF-IDF Tool, Keyword Research Tool etc.) <span
                                class="glyphicon glyphicon-info-sign"><i></i></span></div>
                </td>
                <td class="matrix" data-th="Agency" style="background-color: rgb(247, 247, 247);">200</td>
                <td class="matrix bluecoat !important" data-th="Premium" style="background-color: rgb(223, 235, 253);">
                    50
                </td>
                <td class="matrix" data-th="Basic" style="background-color: rgb(247, 247, 247);">5</td>
            </tr>
            <tr>
                <td style="">
                    <div class="show-tooltip" data-trigger="hover" data-html="true" data-toggle="popover"
                         data-title="Additional project incl. 100 keywords" data-content="Each additional project including 100 keywords will be charged per month with the given price.
We consider the following discount scale:
Starting from 5 additional projects, we give 10% discount on the additional projects and starting from 10 additional projects, we give 20% discount on the additional projects."
                         data-placement="right" data-original-title="" title="" style="">Additional project incl. 100
                        keywords <span class="glyphicon glyphicon-info-sign"><i></i></span></div>
                </td>
                <td class="matrix" data-th="Agency" style="background-color: rgb(247, 247, 247);">€9.90</td>
                <td class="matrix bluecoat !important" data-th="Premium" style="background-color: rgb(223, 235, 253);">
                    €12.90
                </td>
                <td class="matrix" data-th="Basic" style="background-color: rgb(247, 247, 247);"><span
                            class="glyphicon glyphicon-remove"><i></i></span></td>
            </tr>
            <tr>
                <td style="">
                    <div class="show-tooltip" data-trigger="hover" data-html="true" data-toggle="popover"
                         data-title="100 additional keywords" data-content="You can add 100 keywords per pack. Each booking will be charged monthly.
We consider the following discount scale:
Starting from 500 additional keywords, we give 10% discount on these and starting from 1,000 additional keywords, we give 20% discount on these."
                         data-placement="right" data-original-title="" title="" style="">100 additional keywords <span
                                class="glyphicon glyphicon-info-sign"><i></i></span></div>
                </td>
                <td class="matrix" data-th="Agency" style="background-color: rgb(247, 247, 247);">€7.90</td>
                <td class="matrix bluecoat !important" data-th="Premium" style="background-color: rgb(223, 235, 253);">
                    €9.90
                </td>
                <td class="matrix" data-th="Basic" style="background-color: rgb(247, 247, 247);"><span
                            class="glyphicon glyphicon-remove"><i></i></span></td>
            </tr>
            </tbody>
            <tbody class="pricing_spacing">
            <tr>
                <td colspan="4"><strong>Onpage Analysis
                        <span style="margin-top:4px;font-size:90%;" class="pull-right"><a href="/en/website-audit/"
                                                                                          style="text-decoration:underline;"><b
                                        style="font-size:90%;">learn more</b></a></span></strong></td>
            </tr>
            <tr>
                <td style="">
                    <div class="show-tooltip" data-trigger="hover" data-html="true" data-toggle="popover"
                         data-title="Number of parallel crawlers"
                         data-content="Number of crawling instances to crawl your website" data-placement="right"
                         data-original-title="" title="" style="">Number of parallel crawlers <span
                                class="glyphicon glyphicon-info-sign"><i></i></span></div>
                </td>
                <td class="matrix" data-th="Agency" style="background-color: rgb(247, 247, 247);">5</td>
                <td class="matrix bluecoat !important" data-th="Premium" style="background-color: rgb(223, 235, 253);">
                    3
                </td>
                <td class="matrix" data-th="Basic" style="background-color: rgb(247, 247, 247);">1</td>
            </tr>
            <tr>
                <td style="">
                    <div class="show-tooltip" data-trigger="hover" data-html="true" data-toggle="popover"
                         data-title="Automatic regular crawling"
                         data-content="You can set an individual regular crawling. This will automatically restart the crawling of your project at the set interval."
                         data-placement="right" data-original-title="" title="" style="">Automatic regular crawling
                        <span class="glyphicon glyphicon-info-sign"><i></i></span></div>
                </td>
                <td class="matrix" data-th="Agency" style="background-color: rgb(247, 247, 247);"><span
                            class="glyphicon glyphicon-ok"><i></i></span></td>
                <td class="matrix bluecoat !important" data-th="Premium" style="background-color: rgb(223, 235, 253);">
                    <span class="glyphicon glyphicon-ok"><i></i></span></td>
                <td class="matrix" data-th="Basic" style="background-color: rgb(247, 247, 247);"><span
                            class="glyphicon glyphicon-remove"><i></i></span></td>
            </tr>
            <tr>
                <td style="">
                    <div class="show-tooltip" data-trigger="hover" data-html="true" data-toggle="popover"
                         data-title="Javascript Crawling"
                         data-content="Choose whether to run Javascript during website crawling." data-placement="right"
                         data-original-title="" title="" style="">Javascript Crawling <span
                                class="glyphicon glyphicon-info-sign"><i></i></span></div>
                </td>
                <td class="matrix" data-th="Agency" style="background-color: rgb(247, 247, 247);"><span
                            class="glyphicon glyphicon-ok"><i></i></span></td>
                <td class="matrix bluecoat !important" data-th="Premium" style="background-color: rgb(223, 235, 253);">
                    <span class="glyphicon glyphicon-ok"><i></i></span></td>
                <td class="matrix" data-th="Basic" style="background-color: rgb(247, 247, 247);"><span
                            class="glyphicon glyphicon-remove"><i></i></span></td>
            </tr>
            <tr>
                <td style="">
                    <div class="show-tooltip" data-trigger="hover" data-html="true" data-toggle="popover"
                         data-title="All duplicate content analysis (incl. keyword cannibalization)" data-content="Duplicate content problems can have a negative impact on your ranking. The following factors, for example, are checked for this:
Identical content used on multiple pages. Completely duplicated HTML pages, as well as keyword cannibalization, i.e. several URLs that are optimized for the same keyword and thus compete with each other in the search results."
                         data-placement="right" data-original-title="" title="" style="">All duplicate content analysis
                        (incl. keyword cannibalization) <span class="glyphicon glyphicon-info-sign"><i></i></span></div>
                </td>
                <td class="matrix" data-th="Agency" style="background-color: rgb(247, 247, 247);"><span
                            class="glyphicon glyphicon-ok"><i></i></span></td>
                <td class="matrix bluecoat !important" data-th="Premium" style="background-color: rgb(223, 235, 253);">
                    <span class="glyphicon glyphicon-ok"><i></i></span></td>
                <td class="matrix" data-th="Basic" style="background-color: rgb(247, 247, 247);"><span
                            class="glyphicon glyphicon-remove"><i></i></span></td>
            </tr>
            <tr>
                <td style="">
                    <div class="show-tooltip" data-trigger="hover" data-html="true" data-toggle="popover"
                         data-title="Crawling of a specific subdirectory"
                         data-content="In the crawler settings you can limit the analysis to a specific subdirectory."
                         data-placement="right" data-original-title="" title="" style="">Crawling of a specific
                        subdirectory <span class="glyphicon glyphicon-info-sign"><i></i></span></div>
                </td>
                <td class="matrix" data-th="Agency" style="background-color: rgb(247, 247, 247);"><span
                            class="glyphicon glyphicon-ok"><i></i></span></td>
                <td class="matrix bluecoat !important" data-th="Premium" style="background-color: rgb(223, 235, 253);">
                    <span class="glyphicon glyphicon-ok"><i></i></span></td>
                <td class="matrix" data-th="Basic" style="background-color: rgb(247, 247, 247);"><span
                            class="glyphicon glyphicon-remove"><i></i></span></td>
            </tr>
            <tr style="display: none;" class="hidden_pricing_onpageanalysis">
                <td style="">
                    <div class="show-tooltip" data-trigger="hover" data-html="true" data-toggle="popover"
                         data-title="Page browser"
                         data-content="Our page browser shows all the necessary details for a single page. You will find all incoming and outgoing links, meta data, found content, keywords and more for every page."
                         data-placement="right" data-original-title="" title="" style="">Page browser <span
                                class="glyphicon glyphicon-info-sign"><i></i></span></div>
                </td>
                <td class="matrix" data-th="Agency" style="background-color: rgb(247, 247, 247);"><span
                            class="glyphicon glyphicon-ok"><i></i></span></td>
                <td class="matrix bluecoat !important" data-th="Premium" style="background-color: rgb(223, 235, 253);">
                    <span class="glyphicon glyphicon-ok"><i></i></span></td>
                <td class="matrix" data-th="Basic" style="background-color: rgb(247, 247, 247);"><span
                            class="glyphicon glyphicon-ok"><i></i></span></td>
            </tr>
            <tr style="display: none;" class="hidden_pricing_onpageanalysis">
                <td style="">
                    <div class="show-tooltip" data-trigger="hover" data-html="true" data-toggle="popover"
                         data-title="HTTP status codes"
                         data-content="The HTTP status code of every page will be checked to find missing pages or other web server related problems."
                         data-placement="right" data-original-title="" title="" style="">HTTP status codes <span
                                class="glyphicon glyphicon-info-sign"><i></i></span></div>
                </td>
                <td class="matrix" data-th="Agency" style="background-color: rgb(247, 247, 247);"><span
                            class="glyphicon glyphicon-ok"><i></i></span></td>
                <td class="matrix bluecoat !important" data-th="Premium" style="background-color: rgb(223, 235, 253);">
                    <span class="glyphicon glyphicon-ok"><i></i></span></td>
                <td class="matrix" data-th="Basic" style="background-color: rgb(247, 247, 247);"><span
                            class="glyphicon glyphicon-ok"><i></i></span></td>
            </tr>
            <tr style="display: none;" class="hidden_pricing_onpageanalysis">
                <td style="">
                    <div class="show-tooltip" data-trigger="hover" data-html="true" data-toggle="popover"
                         data-title="Broken pages"
                         data-content="All encountered problems while crawling your web pages like timeouts, missing pages and server problems will be saved. It is essential to fix these errors to improve user experience and search engine rankings."
                         data-placement="right" data-original-title="" title="" style="">Broken pages <span
                                class="glyphicon glyphicon-info-sign"><i></i></span></div>
                </td>
                <td class="matrix" data-th="Agency" style="background-color: rgb(247, 247, 247);"><span
                            class="glyphicon glyphicon-ok"><i></i></span></td>
                <td class="matrix bluecoat !important" data-th="Premium" style="background-color: rgb(223, 235, 253);">
                    <span class="glyphicon glyphicon-ok"><i></i></span></td>
                <td class="matrix" data-th="Basic" style="background-color: rgb(247, 247, 247);"><span
                            class="glyphicon glyphicon-ok"><i></i></span></td>
            </tr>
            <tr style="display: none;" class="hidden_pricing_onpageanalysis">
                <td style="">
                    <div class="show-tooltip" data-trigger="hover" data-html="true" data-toggle="popover"
                         data-title="Meta data check"
                         data-content="Meta information for every page will be checked and evaluated. Too long meta titles, missing meta descriptions or pages with the same meta title will be determined."
                         data-placement="right" data-original-title="" title="" style="">Meta data check <span
                                class="glyphicon glyphicon-info-sign"><i></i></span></div>
                </td>
                <td class="matrix" data-th="Agency" style="background-color: rgb(247, 247, 247);"><span
                            class="glyphicon glyphicon-ok"><i></i></span></td>
                <td class="matrix bluecoat !important" data-th="Premium" style="background-color: rgb(223, 235, 253);">
                    <span class="glyphicon glyphicon-ok"><i></i></span></td>
                <td class="matrix" data-th="Basic" style="background-color: rgb(247, 247, 247);"><span
                            class="glyphicon glyphicon-ok"><i></i></span></td>
            </tr>
            <tr style="display: none;" class="hidden_pricing_onpageanalysis">
                <td style="">
                    <div class="show-tooltip" data-trigger="hover" data-html="true" data-toggle="popover"
                         data-title="On-page check"
                         data-content="The on-page check for every page includes all search engine optimization-related HTML elements. It checks whether headings are used correctly, images having proper alt attributes, the use of inline styles is present and much more."
                         data-placement="right" data-original-title="" title="" style="">On-page check <span
                                class="glyphicon glyphicon-info-sign"><i></i></span></div>
                </td>
                <td class="matrix" data-th="Agency" style="background-color: rgb(247, 247, 247);"><span
                            class="glyphicon glyphicon-ok"><i></i></span></td>
                <td class="matrix bluecoat !important" data-th="Premium" style="background-color: rgb(223, 235, 253);">
                    <span class="glyphicon glyphicon-ok"><i></i></span></td>
                <td class="matrix" data-th="Basic" style="background-color: rgb(247, 247, 247);"><span
                            class="glyphicon glyphicon-ok"><i></i></span></td>
            </tr>
            <tr style="display: none;" class="hidden_pricing_onpageanalysis">
                <td style="">
                    <div class="show-tooltip" data-trigger="hover" data-html="true" data-toggle="popover"
                         data-title="Page response time check"
                         data-content="The response times (HTML page download) of all pages are determined to identify slow pages."
                         data-placement="right" data-original-title="" title="" style="">Page response time check <span
                                class="glyphicon glyphicon-info-sign"><i></i></span></div>
                </td>
                <td class="matrix" data-th="Agency" style="background-color: rgb(247, 247, 247);"><span
                            class="glyphicon glyphicon-ok"><i></i></span></td>
                <td class="matrix bluecoat !important" data-th="Premium" style="background-color: rgb(223, 235, 253);">
                    <span class="glyphicon glyphicon-ok"><i></i></span></td>
                <td class="matrix" data-th="Basic" style="background-color: rgb(247, 247, 247);"><span
                            class="glyphicon glyphicon-ok"><i></i></span></td>
            </tr>
            <tr style="display: none;" class="hidden_pricing_onpageanalysis">
                <td style="">
                    <div class="show-tooltip" data-trigger="hover" data-html="true" data-toggle="popover"
                         data-title="URL check"
                         data-content="The URL of a page is more important than you may think. If the URL is cryptic or not easy to read, it will be less frequently visited in the Google search results than short and readable URLs."
                         data-placement="right" data-original-title="" title="" style="">URL check <span
                                class="glyphicon glyphicon-info-sign"><i></i></span></div>
                </td>
                <td class="matrix" data-th="Agency" style="background-color: rgb(247, 247, 247);"><span
                            class="glyphicon glyphicon-ok"><i></i></span></td>
                <td class="matrix bluecoat !important" data-th="Premium" style="background-color: rgb(223, 235, 253);">
                    <span class="glyphicon glyphicon-ok"><i></i></span></td>
                <td class="matrix" data-th="Basic" style="background-color: rgb(247, 247, 247);"><span
                            class="glyphicon glyphicon-ok"><i></i></span></td>
            </tr>
            <tr style="display: none;" class="hidden_pricing_onpageanalysis">
                <td style="">
                    <div class="show-tooltip" data-trigger="hover" data-html="true" data-toggle="popover"
                         data-title="Tips based on the entire crawling of your website"
                         data-content="Tips for optimization will be suggested based on all checks and results."
                         data-placement="right" data-original-title="" title="" style="">Tips based on the entire
                        crawling of your website <span class="glyphicon glyphicon-info-sign"><i></i></span></div>
                </td>
                <td class="matrix" data-th="Agency" style="background-color: rgb(247, 247, 247);"><span
                            class="glyphicon glyphicon-ok"><i></i></span></td>
                <td class="matrix bluecoat !important" data-th="Premium" style="background-color: rgb(223, 235, 253);">
                    <span class="glyphicon glyphicon-ok"><i></i></span></td>
                <td class="matrix" data-th="Basic" style="background-color: rgb(247, 247, 247);"><span
                            class="glyphicon glyphicon-ok"><i></i></span></td>
            </tr>
            <tr style="display: none;" class="hidden_pricing_onpageanalysis">
                <td style="">
                    <div class="show-tooltip" data-trigger="hover" data-html="true" data-toggle="popover"
                         data-title="Blacklist and safebrowsing check"
                         data-content="Different blacklists will be checked to ensure that your website is not listed and no potential visitors and customers get irritated."
                         data-placement="right" data-original-title="" title="" style="">Blacklist and safebrowsing
                        check <span class="glyphicon glyphicon-info-sign"><i></i></span></div>
                </td>
                <td class="matrix" data-th="Agency" style="background-color: rgb(247, 247, 247);"><span
                            class="glyphicon glyphicon-ok"><i></i></span></td>
                <td class="matrix bluecoat !important" data-th="Premium" style="background-color: rgb(223, 235, 253);">
                    <span class="glyphicon glyphicon-ok"><i></i></span></td>
                <td class="matrix" data-th="Basic" style="background-color: rgb(247, 247, 247);"><span
                            class="glyphicon glyphicon-ok"><i></i></span></td>
            </tr>
            <tr style="display: none;" class="hidden_pricing_onpageanalysis">
                <td style="">
                    <div class="show-tooltip" data-trigger="hover" data-html="true" data-toggle="popover"
                         data-title="CSV and PDF export for each check"
                         data-content="Each check result as well as the results for the whole project can easily be exported to CSV or PDF files."
                         data-placement="right" data-original-title="" title="" style="">CSV and PDF export for each
                        check <span class="glyphicon glyphicon-info-sign"><i></i></span></div>
                </td>
                <td class="matrix" data-th="Agency" style="background-color: rgb(247, 247, 247);"><span
                            class="glyphicon glyphicon-ok"><i></i></span></td>
                <td class="matrix bluecoat !important" data-th="Premium" style="background-color: rgb(223, 235, 253);">
                    <span class="glyphicon glyphicon-ok"><i></i></span></td>
                <td class="matrix" data-th="Basic" style="background-color: rgb(247, 247, 247);"><span
                            class="glyphicon glyphicon-remove"><i></i></span></td>
            </tr>
            <tr style="display: none;" class="hidden_pricing_onpageanalysis">
                <td style="">
                    <div class="show-tooltip" data-trigger="hover" data-html="true" data-toggle="popover"
                         data-title="Identifying the top pages of your website"
                         data-content="By analyzing all internal links, the most important pages of your website are detected."
                         data-placement="right" data-original-title="" title="" style="">Identifying the top pages of
                        your website <span class="glyphicon glyphicon-info-sign"><i></i></span></div>
                </td>
                <td class="matrix" data-th="Agency" style="background-color: rgb(247, 247, 247);"><span
                            class="glyphicon glyphicon-ok"><i></i></span></td>
                <td class="matrix bluecoat !important" data-th="Premium" style="background-color: rgb(223, 235, 253);">
                    <span class="glyphicon glyphicon-ok"><i></i></span></td>
                <td class="matrix" data-th="Basic" style="background-color: rgb(247, 247, 247);"><span
                            class="glyphicon glyphicon-ok"><i></i></span></td>
            </tr>
            <tr style="display: none;" class="hidden_pricing_onpageanalysis">
                <td style="">
                    <div class="show-tooltip" data-trigger="hover" data-html="true" data-toggle="popover"
                         data-title="Determination of linked redirects"
                         data-content="Avoid linking to redirects. Instead of that use links to final targets to save crawling resources for search engine bots. Seobility detects and analyzes unnecessary redirects."
                         data-placement="right" data-original-title="" title="" style="">Determination of linked
                        redirects <span class="glyphicon glyphicon-info-sign"><i></i></span></div>
                </td>
                <td class="matrix" data-th="Agency" style="background-color: rgb(247, 247, 247);"><span
                            class="glyphicon glyphicon-ok"><i></i></span></td>
                <td class="matrix bluecoat !important" data-th="Premium" style="background-color: rgb(223, 235, 253);">
                    <span class="glyphicon glyphicon-ok"><i></i></span></td>
                <td class="matrix" data-th="Basic" style="background-color: rgb(247, 247, 247);"><span
                            class="glyphicon glyphicon-ok"><i></i></span></td>
            </tr>
            <tr style="display: none;" class="hidden_pricing_onpageanalysis">
                <td style="">
                    <div class="show-tooltip" data-trigger="hover" data-html="true" data-toggle="popover"
                         data-title="Determination of the shortest distance to the homepage"
                         data-content="The shortes click path from your homepage to every checked subpage will be computed to identify pages and content, which are/is not well linked from other pages."
                         data-placement="right" data-original-title="" title="" style="">Determination of the shortest
                        distance to the homepage <span class="glyphicon glyphicon-info-sign"><i></i></span></div>
                </td>
                <td class="matrix" data-th="Agency" style="background-color: rgb(247, 247, 247);"><span
                            class="glyphicon glyphicon-ok"><i></i></span></td>
                <td class="matrix bluecoat !important" data-th="Premium" style="background-color: rgb(223, 235, 253);">
                    <span class="glyphicon glyphicon-ok"><i></i></span></td>
                <td class="matrix" data-th="Basic" style="background-color: rgb(247, 247, 247);"><span
                            class="glyphicon glyphicon-ok"><i></i></span></td>
            </tr>
            <tr style="display: none;" class="hidden_pricing_onpageanalysis">
                <td style="">
                    <div class="show-tooltip" data-trigger="hover" data-html="true" data-toggle="popover"
                         data-title="Determination of all incoming links to a page"
                         data-content="All incoming internal links and anchor texts are computed for every page."
                         data-placement="right" data-original-title="" title="" style="">Determination of all incoming
                        links to a page <span class="glyphicon glyphicon-info-sign"><i></i></span></div>
                </td>
                <td class="matrix" data-th="Agency" style="background-color: rgb(247, 247, 247);"><span
                            class="glyphicon glyphicon-ok"><i></i></span></td>
                <td class="matrix bluecoat !important" data-th="Premium" style="background-color: rgb(223, 235, 253);">
                    <span class="glyphicon glyphicon-ok"><i></i></span></td>
                <td class="matrix" data-th="Basic" style="background-color: rgb(247, 247, 247);"><span
                            class="glyphicon glyphicon-ok"><i></i></span></td>
            </tr>
            <tr style="display: none;" class="hidden_pricing_onpageanalysis">
                <td style="">
                    <div class="show-tooltip" data-trigger="hover" data-html="true" data-toggle="popover"
                         data-title="Determination of bad external links"
                         data-content="External links to other websites are checked to ensure, that your website does not link to missing, inappropriate or dangerous websites."
                         data-placement="right" data-original-title="" title="" style="">Determination of bad external
                        links <span class="glyphicon glyphicon-info-sign"><i></i></span></div>
                </td>
                <td class="matrix" data-th="Agency" style="background-color: rgb(247, 247, 247);"><span
                            class="glyphicon glyphicon-ok"><i></i></span></td>
                <td class="matrix bluecoat !important" data-th="Premium" style="background-color: rgb(223, 235, 253);">
                    <span class="glyphicon glyphicon-ok"><i></i></span></td>
                <td class="matrix" data-th="Basic" style="background-color: rgb(247, 247, 247);"><span
                            class="glyphicon glyphicon-ok"><i></i></span></td>
            </tr>
            <tr style="display: none;" class="hidden_pricing_onpageanalysis">
                <td style="">
                    <div class="show-tooltip" data-trigger="hover" data-html="true" data-toggle="popover"
                         data-title="Determination of the most used keywords"
                         data-content="Based on your website's content the most important keywords and keyword combinations will be determined."
                         data-placement="right" data-original-title="" title="" style="">Determination of the most used
                        keywords <span class="glyphicon glyphicon-info-sign"><i></i></span></div>
                </td>
                <td class="matrix" data-th="Agency" style="background-color: rgb(247, 247, 247);"><span
                            class="glyphicon glyphicon-ok"><i></i></span></td>
                <td class="matrix bluecoat !important" data-th="Premium" style="background-color: rgb(223, 235, 253);">
                    <span class="glyphicon glyphicon-ok"><i></i></span></td>
                <td class="matrix" data-th="Basic" style="background-color: rgb(247, 247, 247);"><span
                            class="glyphicon glyphicon-ok"><i></i></span></td>
            </tr>
            <tr style="display: none;" class="hidden_pricing_onpageanalysis">
                <td style="">
                    <div class="show-tooltip" data-trigger="hover" data-html="true" data-toggle="popover"
                         data-title="Determination of pages without concrete keyword optimization"
                         data-content="If your pages have a lot of good content but lack on a proper keyword optimization, you will have problems to rank on search engines for important keywords."
                         data-placement="right" data-original-title="" title="" style="">Determination of pages without
                        concrete keyword optimization <span class="glyphicon glyphicon-info-sign"><i></i></span></div>
                </td>
                <td class="matrix" data-th="Agency" style="background-color: rgb(247, 247, 247);"><span
                            class="glyphicon glyphicon-ok"><i></i></span></td>
                <td class="matrix bluecoat !important" data-th="Premium" style="background-color: rgb(223, 235, 253);">
                    <span class="glyphicon glyphicon-ok"><i></i></span></td>
                <td class="matrix" data-th="Basic" style="background-color: rgb(247, 247, 247);"><span
                            class="glyphicon glyphicon-ok"><i></i></span></td>
            </tr>
            <tr style="display: none;" class="hidden_pricing_onpageanalysis">
                <td style="">
                    <div class="show-tooltip" data-trigger="hover" data-html="true" data-toggle="popover"
                         data-title="Determination of pages with little content" data-content="You should provide content on your pages to satisfy users and search engines as well. Seobility finds pages
without appreciable content." data-placement="right" data-original-title="" title="" style="">Determination of pages
                        with little content <span class="glyphicon glyphicon-info-sign"><i></i></span></div>
                </td>
                <td class="matrix" data-th="Agency" style="background-color: rgb(247, 247, 247);"><span
                            class="glyphicon glyphicon-ok"><i></i></span></td>
                <td class="matrix bluecoat !important" data-th="Premium" style="background-color: rgb(223, 235, 253);">
                    <span class="glyphicon glyphicon-ok"><i></i></span></td>
                <td class="matrix" data-th="Basic" style="background-color: rgb(247, 247, 247);"><span
                            class="glyphicon glyphicon-ok"><i></i></span></td>
            </tr>
            <tr style="display: none;" class="hidden_pricing_onpageanalysis">
                <td style="">
                    <div class="show-tooltip" data-trigger="hover" data-html="true" data-toggle="popover"
                         data-title="Determination of pages with typos"
                         data-content="Typos are not only small ugly mistakes, they can also negativly impact the reputation of your website among users and search engines. Seobility shows you common typos on your pages."
                         data-placement="right" data-original-title="" title="" style="">Determination of pages with
                        typos <span class="glyphicon glyphicon-info-sign"><i></i></span></div>
                </td>
                <td class="matrix" data-th="Agency" style="background-color: rgb(247, 247, 247);"><span
                            class="glyphicon glyphicon-ok"><i></i></span></td>
                <td class="matrix bluecoat !important" data-th="Premium" style="background-color: rgb(223, 235, 253);">
                    <span class="glyphicon glyphicon-ok"><i></i></span></td>
                <td class="matrix" data-th="Basic" style="background-color: rgb(247, 247, 247);"><span
                            class="glyphicon glyphicon-ok"><i></i></span></td>
            </tr>
            <tr style="display: none;" class="hidden_pricing_onpageanalysis">
                <td style="">
                    <div class="show-tooltip" data-trigger="hover" data-html="true" data-toggle="popover"
                         data-title="Determination of pages with the same paragraphs"
                         data-content="It will be checked if each found paragraph appears on the same page or on any other page more than once."
                         data-placement="right" data-original-title="" title="" style="">Determination of pages with the
                        same paragraphs <span class="glyphicon glyphicon-info-sign"><i></i></span></div>
                </td>
                <td class="matrix" data-th="Agency" style="background-color: rgb(247, 247, 247);"><span
                            class="glyphicon glyphicon-ok"><i></i></span></td>
                <td class="matrix bluecoat !important" data-th="Premium" style="background-color: rgb(223, 235, 253);">
                    <span class="glyphicon glyphicon-ok"><i></i></span></td>
                <td class="matrix" data-th="Basic" style="background-color: rgb(247, 247, 247);"><span
                            class="glyphicon glyphicon-ok"><i></i></span></td>
            </tr>
            <tr style="display: none;" class="hidden_pricing_onpageanalysis">
                <td style="">
                    <div class="show-tooltip" data-trigger="hover" data-html="true" data-toggle="popover"
                         data-title="Determination of pages with the same content (Duplicate Content)"
                         data-content="Duplicate pages or pages with content that appears also on other pages will be found."
                         data-placement="right" data-original-title="" title="" style="">Determination of pages with the
                        same content (Duplicate Content) <span class="glyphicon glyphicon-info-sign"><i></i></span>
                    </div>
                </td>
                <td class="matrix" data-th="Agency" style="background-color: rgb(247, 247, 247);"><span
                            class="glyphicon glyphicon-ok"><i></i></span></td>
                <td class="matrix bluecoat !important" data-th="Premium" style="background-color: rgb(223, 235, 253);">
                    <span class="glyphicon glyphicon-ok"><i></i></span></td>
                <td class="matrix" data-th="Basic" style="background-color: rgb(247, 247, 247);"><span
                            class="glyphicon glyphicon-remove"><i></i></span></td>
            </tr>
            <tr style="display: none;" class="hidden_pricing_onpageanalysis">
                <td style="">
                    <div class="show-tooltip" data-trigger="hover" data-html="true" data-toggle="popover"
                         data-title="Determination of pages with inappropriate titles with regard to the page content"
                         data-content="Is the title of your web page in line with its content? Title and (text) content should correspond to each other very well and keywords from the title should be reused in the page's text content. Seobility shows you pages where this is not the case."
                         data-placement="right" data-original-title="" title="" style="">Determination of pages with
                        inappropriate titles with regard to the page content <span
                                class="glyphicon glyphicon-info-sign"><i></i></span></div>
                </td>
                <td class="matrix" data-th="Agency" style="background-color: rgb(247, 247, 247);"><span
                            class="glyphicon glyphicon-ok"><i></i></span></td>
                <td class="matrix bluecoat !important" data-th="Premium" style="background-color: rgb(223, 235, 253);">
                    <span class="glyphicon glyphicon-ok"><i></i></span></td>
                <td class="matrix" data-th="Basic" style="background-color: rgb(247, 247, 247);"><span
                            class="glyphicon glyphicon-remove"><i></i></span></td>
            </tr>
            <tr style="display: none;" class="hidden_pricing_onpageanalysis">
                <td style="">
                    <div class="show-tooltip" data-trigger="hover" data-html="true" data-toggle="popover"
                         data-title="Determination of competing pages which have the same keyword optimization"
                         data-content="Do not optimize more than one page for the same set of keywords, since usually only one page from your website will be considered for a query on search engines. Seobility helps you to find pages with similar keyword optimization."
                         data-placement="right" data-original-title="" title="" style="">Determination of competing
                        pages which have the same keyword optimization <span
                                class="glyphicon glyphicon-info-sign"><i></i></span></div>
                </td>
                <td class="matrix" data-th="Agency" style="background-color: rgb(247, 247, 247);"><span
                            class="glyphicon glyphicon-ok"><i></i></span></td>
                <td class="matrix bluecoat !important" data-th="Premium" style="background-color: rgb(223, 235, 253);">
                    <span class="glyphicon glyphicon-ok"><i></i></span></td>
                <td class="matrix" data-th="Basic" style="background-color: rgb(247, 247, 247);"><span
                            class="glyphicon glyphicon-remove"><i></i></span></td>
            </tr>
            <tr class="pricing_features">
                <td style="background-color: #fff;" class="smartphone-hide"></td>
                <td class="pointer" colspan="3" id="hidden_pricing_onpageanalysis"
                    style="background-color: rgb(247, 247, 247);">Show all features <span
                            class="glyphicon glyphicon-chevron-down"><i></i></span></td>
            </tr>
            </tbody>
            <tbody class="pricing_spacing">
            <tr>
                <td colspan="4"><strong>Keyword Ranking Monitoring
                        <span style="margin-top:4px;font-size:90%;" class="pull-right"><a href="/en/keywordmonitoring/"
                                                                                          style="text-decoration:underline;"><b
                                        style="font-size:90%;">learn more</b></a></span></strong></td>
            </tr>
            <tr>
                <td style="">
                    <div class="show-tooltip" data-trigger="hover" data-html="true" data-toggle="popover"
                         data-title="Desktop and mobile rankings"
                         data-content="We check rankings for desktop search results and smartphone search results as well."
                         data-placement="right" data-original-title="" title="" style="">Desktop and mobile rankings
                        <span class="glyphicon glyphicon-info-sign"><i></i></span></div>
                </td>
                <td class="matrix" data-th="Agency" style="background-color: rgb(247, 247, 247);"><span
                            class="glyphicon glyphicon-ok"><i></i></span></td>
                <td class="matrix bluecoat !important" data-th="Premium" style="background-color: rgb(223, 235, 253);">
                    <span class="glyphicon glyphicon-ok"><i></i></span></td>
                <td class="matrix" data-th="Basic" style="background-color: rgb(247, 247, 247);"><span
                            class="glyphicon glyphicon-remove"><i></i></span> only desktop
                </td>
            </tr>
            <tr>
                <td style="">
                    <div class="show-tooltip" data-trigger="hover" data-html="true" data-toggle="popover"
                         data-title="Refreshing the desktop rankings"
                         data-content="Desktop search results are updated daily." data-placement="right"
                         data-original-title="" title="" style="">Refreshing the desktop rankings <span
                                class="glyphicon glyphicon-info-sign"><i></i></span></div>
                </td>
                <td class="matrix" data-th="Agency" style="background-color: rgb(247, 247, 247);">daily</td>
                <td class="matrix bluecoat !important" data-th="Premium" style="background-color: rgb(223, 235, 253);">
                    daily
                </td>
                <td class="matrix" data-th="Basic" style="background-color: rgb(247, 247, 247);">daily</td>
            </tr>
            <tr>
                <td style="">
                    <div class="show-tooltip" data-trigger="hover" data-html="true" data-toggle="popover"
                         data-title="Refreshing the Mobile Rankings"
                         data-content="The search results for smartphones are refreshed every three days, regardless of the desktop rankings."
                         data-placement="right" data-original-title="" title="" style="">Refreshing the Mobile Rankings
                        <span class="glyphicon glyphicon-info-sign"><i></i></span></div>
                </td>
                <td class="matrix" data-th="Agency" style="background-color: rgb(247, 247, 247);">every three days</td>
                <td class="matrix bluecoat !important" data-th="Premium" style="background-color: rgb(223, 235, 253);">
                    every three days
                </td>
                <td class="matrix" data-th="Basic" style="background-color: rgb(247, 247, 247);"><span
                            class="glyphicon glyphicon-remove"><i></i></span></td>
            </tr>
            <tr>
                <td style="">
                    <div class="show-tooltip" data-trigger="hover" data-html="true" data-toggle="popover"
                         data-title="Location based search results (country &amp; city)"
                         data-content="Besides the choice of various countries and search engines, search results can also be evaluated at a city level."
                         data-placement="right" data-original-title="" title="" style="">Location based search results
                        (country &amp; city) <span class="glyphicon glyphicon-info-sign"><i></i></span></div>
                </td>
                <td class="matrix" data-th="Agency" style="background-color: rgb(247, 247, 247);"><span
                            class="glyphicon glyphicon-ok"><i></i></span></td>
                <td class="matrix bluecoat !important" data-th="Premium" style="background-color: rgb(223, 235, 253);">
                    <span class="glyphicon glyphicon-ok"><i></i></span></td>
                <td class="matrix" data-th="Basic" style="background-color: rgb(247, 247, 247);"><span
                            class="glyphicon glyphicon-remove"><i></i></span> only countries
                </td>
            </tr>
            <tr>
                <td style="">
                    <div class="show-tooltip" data-trigger="hover" data-html="true" data-toggle="popover"
                         data-title="Competitors monitoring per project"
                         data-content="Limit of ranking competitors per project" data-placement="right"
                         data-original-title="" title="" style="">Competitors monitoring per project <span
                                class="glyphicon glyphicon-info-sign"><i></i></span></div>
                </td>
                <td class="matrix" data-th="Agency" style="background-color: rgb(247, 247, 247);">30</td>
                <td class="matrix bluecoat !important" data-th="Premium" style="background-color: rgb(223, 235, 253);">
                    20
                </td>
                <td class="matrix" data-th="Basic" style="background-color: rgb(247, 247, 247);">3</td>
            </tr>
            <tr style="display: none;" class="hidden_pricing_keywordmonitoring">
                <td style="">
                    <div class="show-tooltip" data-trigger="hover" data-html="true" data-toggle="popover"
                         data-title="Combination of rankings and onpage analysis"
                         data-content="All pages found in the search results will be included in the onpage analysis and will be also tested on an good optimization for the specified keyword."
                         data-placement="right" data-original-title="" title="" style="">Combination of rankings and
                        onpage analysis <span class="glyphicon glyphicon-info-sign"><i></i></span></div>
                </td>
                <td class="matrix" data-th="Agency" style="background-color: rgb(247, 247, 247);"><span
                            class="glyphicon glyphicon-ok"><i></i></span></td>
                <td class="matrix bluecoat !important" data-th="Premium" style="background-color: rgb(223, 235, 253);">
                    <span class="glyphicon glyphicon-ok"><i></i></span></td>
                <td class="matrix" data-th="Basic" style="background-color: rgb(247, 247, 247);"><span
                            class="glyphicon glyphicon-remove"><i></i></span></td>
            </tr>
            <tr style="display: none;" class="hidden_pricing_keywordmonitoring">
                <td style="">
                    <div class="show-tooltip" data-trigger="hover" data-html="true" data-toggle="popover"
                         data-title="Search Volume, CPC and competition"
                         data-content="To determine the importance of a keyword, search volume, CPC and competition of the search term are included."
                         data-placement="right" data-original-title="" title="" style="">Search Volume, CPC and
                        competition <span class="glyphicon glyphicon-info-sign"><i></i></span></div>
                </td>
                <td class="matrix" data-th="Agency" style="background-color: rgb(247, 247, 247);"><span
                            class="glyphicon glyphicon-ok"><i></i></span></td>
                <td class="matrix bluecoat !important" data-th="Premium" style="background-color: rgb(223, 235, 253);">
                    <span class="glyphicon glyphicon-ok"><i></i></span></td>
                <td class="matrix" data-th="Basic" style="background-color: rgb(247, 247, 247);"><span
                            class="glyphicon glyphicon-remove"><i></i></span></td>
            </tr>
            <tr class="pricing_features">
                <td style="background-color: #fff;" class="smartphone-hide"></td>
                <td class="pointer" colspan="3" id="hidden_pricing_keywordmonitoring"
                    style="background-color: rgb(247, 247, 247);">Show all features <span
                            class="glyphicon glyphicon-chevron-down"><i></i></span></td>
            </tr>
            </tbody>
            <tbody class="pricing_spacing">
            <tr>
                <td colspan="4"><strong>Backlink analysis and monitoring
                        <span style="margin-top:4px;font-size:90%;" class="pull-right"><a href="/en/backlink-analysis/"
                                                                                          style="text-decoration:underline;"><b
                                        style="font-size:90%;">learn more</b></a></span></strong></td>
            </tr>
            <tr>
                <td style="">
                    <div class="show-tooltip" data-trigger="hover" data-html="true" data-toggle="popover"
                         data-title="Existing, new and lost backlinks; updated weekly"
                         data-content="Detailed analysis of new and lost backlinks" data-placement="right"
                         data-original-title="" title="" style="">Existing, new and lost backlinks; updated weekly <span
                                class="glyphicon glyphicon-info-sign"><i></i></span></div>
                </td>
                <td class="matrix" data-th="Agency" style="background-color: rgb(247, 247, 247);"><span
                            class="glyphicon glyphicon-ok"><i></i></span></td>
                <td class="matrix bluecoat !important" data-th="Premium" style="background-color: rgb(223, 235, 253);">
                    <span class="glyphicon glyphicon-ok"><i></i></span></td>
                <td class="matrix" data-th="Basic" style="background-color: rgb(247, 247, 247);"><span
                            class="glyphicon glyphicon-remove"><i></i></span></td>
            </tr>
            <tr>
                <td style="">
                    <div class="show-tooltip" data-trigger="hover" data-html="true" data-toggle="popover"
                         data-title="Link Building Tools"
                         data-content="In addition to backlink analysis, Seobility link building tools allow you to generate new and useful backlinks for your website."
                         data-placement="right" data-original-title="" title="" style="">Link Building Tools <span
                                class="glyphicon glyphicon-info-sign"><i></i></span></div>
                </td>
                <td class="matrix" data-th="Agency" style="background-color: rgb(247, 247, 247);"><span
                            class="glyphicon glyphicon-ok"><i></i></span></td>
                <td class="matrix bluecoat !important" data-th="Premium" style="background-color: rgb(223, 235, 253);">
                    <span class="glyphicon glyphicon-ok"><i></i></span></td>
                <td class="matrix" data-th="Basic" style="background-color: rgb(247, 247, 247);"><span
                            class="glyphicon glyphicon-remove"><i></i></span></td>
            </tr>
            <tr style="display: none;" class="hidden_pricing_backlink">
                <td style="">
                    <div class="show-tooltip" data-trigger="hover" data-html="true" data-toggle="popover"
                         data-title="Anchor texts" data-content="List of used link anchors of backlinks"
                         data-placement="right" data-original-title="" title="" style="">Anchor texts <span
                                class="glyphicon glyphicon-info-sign"><i></i></span></div>
                </td>
                <td class="matrix" data-th="Agency" style="background-color: rgb(247, 247, 247);"><span
                            class="glyphicon glyphicon-ok"><i></i></span></td>
                <td class="matrix bluecoat !important" data-th="Premium" style="background-color: rgb(223, 235, 253);">
                    <span class="glyphicon glyphicon-ok"><i></i></span></td>
                <td class="matrix" data-th="Basic" style="background-color: rgb(247, 247, 247);"><span
                            class="glyphicon glyphicon-remove"><i></i></span></td>
            </tr>
            <tr style="display: none;" class="hidden_pricing_backlink">
                <td style="">
                    <div class="show-tooltip" data-trigger="hover" data-html="true" data-toggle="popover"
                         data-title="Backlink analysis of competitors"
                         data-content="Seobility helps you analyze your competitors in order to gain insight into their link building strategies."
                         data-placement="right" data-original-title="" title="" style="">Backlink analysis of
                        competitors <span class="glyphicon glyphicon-info-sign"><i></i></span></div>
                </td>
                <td class="matrix" data-th="Agency" style="background-color: rgb(247, 247, 247);"><span
                            class="glyphicon glyphicon-ok"><i></i></span></td>
                <td class="matrix bluecoat !important" data-th="Premium" style="background-color: rgb(223, 235, 253);">
                    <span class="glyphicon glyphicon-ok"><i></i></span></td>
                <td class="matrix" data-th="Basic" style="background-color: rgb(247, 247, 247);"><span
                            class="glyphicon glyphicon-remove"><i></i></span></td>
            </tr>
            <tr class="pricing_features">
                <td style="background-color: #fff;" class="smartphone-hide"></td>
                <td class="pointer" colspan="3" id="hidden_pricing_backlink"
                    style="background-color: rgb(247, 247, 247);">Show all features <span
                            class="glyphicon glyphicon-chevron-down"><i></i></span></td>
            </tr>
            </tbody>
            <tbody class="pricing_spacing">
            <tr>
                <td colspan="4"><strong>Monitoring and reporting features</strong></td>
            </tr>
            <tr>
                <td style="">
                    <div class="show-tooltip" data-trigger="hover" data-html="true" data-toggle="popover"
                         data-title="PDF and CSV exports incl. white label"
                         data-content="Create PDF reports with your own logo and download all analysis as a CSV file."
                         data-placement="right" data-original-title="" title="" style="">PDF and CSV exports incl. white
                        label <span class="glyphicon glyphicon-info-sign"><i></i></span></div>
                </td>
                <td class="matrix" data-th="Agency" style="background-color: rgb(247, 247, 247);"><span
                            class="glyphicon glyphicon-ok"><i></i></span></td>
                <td class="matrix bluecoat !important" data-th="Premium" style="background-color: rgb(223, 235, 253);">
                    <span class="glyphicon glyphicon-ok"><i></i></span></td>
                <td class="matrix" data-th="Basic" style="background-color: rgb(247, 247, 247);"><span
                            class="glyphicon glyphicon-remove"><i></i></span></td>
            </tr>
            <tr>
                <td style="">
                    <div class="show-tooltip" data-trigger="hover" data-html="true" data-toggle="popover"
                         data-title="Project Sharing"
                         data-content="You can share the complete analysis of a website using a share URL. So you are able to grant read access to specific projects in your account."
                         data-placement="right" data-original-title="" title="" style="">Project Sharing <span
                                class="glyphicon glyphicon-info-sign"><i></i></span></div>
                </td>
                <td class="matrix" data-th="Agency" style="background-color: rgb(247, 247, 247);"><span
                            class="glyphicon glyphicon-ok"><i></i></span></td>
                <td class="matrix bluecoat !important" data-th="Premium" style="background-color: rgb(223, 235, 253);">
                    <span class="glyphicon glyphicon-ok"><i></i></span></td>
                <td class="matrix" data-th="Basic" style="background-color: rgb(247, 247, 247);"><span
                            class="glyphicon glyphicon-remove"><i></i></span></td>
            </tr>
            <tr>
                <td style="">
                    <div class="show-tooltip" data-trigger="hover" data-html="true" data-toggle="popover"
                         data-title="Sub accounts"
                         data-content="Sub accounts allow you to define which team members are allowed to work on the different projects."
                         data-placement="right" data-original-title="" title="" style="">Sub accounts <span
                                class="glyphicon glyphicon-info-sign"><i></i></span></div>
                </td>
                <td class="matrix" data-th="Agency" style="background-color: rgb(247, 247, 247);"><span
                            class="glyphicon glyphicon-ok"><i></i></span></td>
                <td class="matrix bluecoat !important" data-th="Premium" style="background-color: rgb(223, 235, 253);">
                    <span class="glyphicon glyphicon-remove"><i></i></span></td>
                <td class="matrix" data-th="Basic" style="background-color: rgb(247, 247, 247);"><span
                            class="glyphicon glyphicon-remove"><i></i></span></td>
            </tr>
            <tr style="display: none;" class="hidden_pricing_monitoring">
                <td style="">
                    <div class="show-tooltip" data-trigger="hover" data-html="true" data-toggle="popover"
                         data-title="E-mail alerts on critical website errors"
                         data-content="You will be notified by e-mail, if important errors or significant changes in optimization occur while crawling your website."
                         data-placement="right" data-original-title="" title="" style="">E-mail alerts on critical
                        website errors <span class="glyphicon glyphicon-info-sign"><i></i></span></div>
                </td>
                <td class="matrix" data-th="Agency" style="background-color: rgb(247, 247, 247);"><span
                            class="glyphicon glyphicon-ok"><i></i></span></td>
                <td class="matrix bluecoat !important" data-th="Premium" style="background-color: rgb(223, 235, 253);">
                    <span class="glyphicon glyphicon-ok"><i></i></span></td>
                <td class="matrix" data-th="Basic" style="background-color: rgb(247, 247, 247);"><span
                            class="glyphicon glyphicon-ok"><i></i></span></td>
            </tr>
            <tr style="display: none;" class="hidden_pricing_monitoring">
                <td style="">
                    <div class="show-tooltip" data-trigger="hover" data-html="true" data-toggle="popover"
                         data-title="E-mail reporting after crawling"
                         data-content="Right after the crawling of your project is carried out you will automatically receive an e-mail including the most important notes of your crawling result"
                         data-placement="right" data-original-title="" title="" style="">E-mail reporting after crawling
                        <span class="glyphicon glyphicon-info-sign"><i></i></span></div>
                </td>
                <td class="matrix" data-th="Agency" style="background-color: rgb(247, 247, 247);"><span
                            class="glyphicon glyphicon-ok"><i></i></span></td>
                <td class="matrix bluecoat !important" data-th="Premium" style="background-color: rgb(223, 235, 253);">
                    <span class="glyphicon glyphicon-ok"><i></i></span></td>
                <td class="matrix" data-th="Basic" style="background-color: rgb(247, 247, 247);"><span
                            class="glyphicon glyphicon-ok"><i></i></span></td>
            </tr>
            <tr style="display: none;" class="hidden_pricing_monitoring">
                <td style="">
                    <div class="show-tooltip" data-trigger="hover" data-html="true" data-toggle="popover"
                         data-title="Custom e-mail recipients for crawling and ranking reports"
                         data-content="Specify up to five different e-mail recipients for crawling and ranking reports."
                         data-placement="right" data-original-title="" title="" style="">Custom e-mail recipients for
                        crawling and ranking reports <span class="glyphicon glyphicon-info-sign"><i></i></span></div>
                </td>
                <td class="matrix" data-th="Agency" style="background-color: rgb(247, 247, 247);"><span
                            class="glyphicon glyphicon-ok"><i></i></span></td>
                <td class="matrix bluecoat !important" data-th="Premium" style="background-color: rgb(223, 235, 253);">
                    <span class="glyphicon glyphicon-ok"><i></i></span></td>
                <td class="matrix" data-th="Basic" style="background-color: rgb(247, 247, 247);"><span
                            class="glyphicon glyphicon-remove"><i></i></span></td>
            </tr>
            <tr class="pricing_features">
                <td style="background-color: #fff;" class="smartphone-hide"></td>
                <td class="pointer" colspan="3" id="hidden_pricing_monitoring"
                    style="background-color: rgb(247, 247, 247);">Show all features <span
                            class="glyphicon glyphicon-chevron-down"><i></i></span></td>
            </tr>
            </tbody>
            <tbody>
            <tr class="show-mobile">
                <td class="emptycell"></td>

                <td class="pricingcell" style="background-color: rgb(247, 247, 247);">
                    <span class="visible-xs">Agency</span>
                    <a href="https://www.seobility.net/en/register/step2.do?productid=2&amp;payinterval=1&amp;currency=EUR"
                       class="btn btn-success">Sign Up Now</a></td>
                <td class="pricingcell bluecoat" style="background-color: rgb(223, 235, 253);">
                    <span class="visible-xs">Premium</span>
                    <a href="https://www.seobility.net/en/register/step2.do?productid=1&amp;payinterval=1&amp;currency=EUR"
                       class="btn btn-success">Proceed to next step</a></td>
                <td class="pricingcell" style="vertical-align: middle; background-color: rgb(247, 247, 247);">
                    <span class="visible-xs">Basic</span>
                    <small>Your current account</small></td>
            </tr>

            </tbody>
        </table>

        <div class="row">
            <div class="col-md-8 col-md-offset-4 center">
                You can upgrade your account at any time. An upgrade will be activated immediately after your purchase.
            </div>
        </div>
        <br>
    </div>

<?php

include $_SERVER['DOCUMENT_ROOT'] . '/footer.php';
?>