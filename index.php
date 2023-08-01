<?php 

function dynamicModules()
{
    $result = ['about', 'units', 'request-pricelist', 'journal']; 

    return $result;
}

function dynamicModulesIn()
{
    $result = ['tentang', 'units', 'request-pricelist', 'jurnal']; 

    return $result;
}

$url = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$parse_url = explode('/', $url);
$post_data = get_post();

$whitelist = array(
    '127.0.0.1',
    '::1'
);

if(!in_array($_SERVER['REMOTE_ADDR'], $whitelist)) {
    foreach ($parse_url as $value) {
		if (!empty($value)) {
			$parseUrl[] = $value;
		}
	}
} else {
	foreach ($parse_url as $value) {
		if (!empty($value)) {
			$parseUrl[] = $value;
		}
	}
}

if (in_array(dynamicModules()[0], $parseUrl)) {
    
        include 'views/layouts/header.php';

        include 'models/frontModel.php';
        include 'controllers/aboutController.php';
        
        // include 'views/forms/request-brochure.php';
        include 'views/page-about.php';

        include 'views/layouts/footer.php';

    } elseif (in_array(dynamicModules()[1], $parseUrl)) {
        include 'views/layouts/header.php';

        include 'models/frontModel.php';
        include 'controllers/unitController.php';
        include 'views/page-units.php';

        include 'views/layouts/footer.php';

    } elseif (in_array(dynamicModules()[2], $parseUrl)) {
        include 'views/layouts/header.php';

        include 'models/frontModel.php';
        include 'controllers/requestPricelistController.php';
        include 'views/page-request-pricelist.php';

        include 'views/layouts/footer.php';

    } elseif (in_array(dynamicModules()[3], $parseUrl)) {
        
        include 'views/layouts/header.php';

        include 'models/frontModel.php';
        include 'controllers/journalController.php';
        include 'views/page-journal.php';

        include 'views/layouts/footer.php';

    } else {
        
        if (is_front_page() == 1) {
            include 'views/layouts/header.php';

            include 'models/frontModel.php';
            include 'controllers/homeController.php';
            
            include 'views/forms/request-brochure.php';
            include 'views/page-homepage.php';
            
            include 'views/layouts/footer.php';
        } else {
            
            /*
            ** This is Frontend Units Details
            */ 
            if (isset($post_data)) {
                
                $categories = ['terra', 'avana', 'integra'];
                
                if (in_array($post_data->post_name, $categories)) {
                    include 'views/layouts/header.php';

                    include 'models/frontModel.php';
                    include 'controllers/unitController.php';

                    include 'views/page-unit-detail.php';

                    include 'views/layouts/footer.php';
                } else {
                    if (!empty($post_data)) {
                        include 'views/layouts/header.php';

                        include 'models/frontModel.php';
                        include 'controllers/journalController.php';

                        include 'views/page-journal-detail.php';

                        include 'views/layouts/footer.php';
                    } else {
                        include 'views/layouts/header.php';
                        echo '<section class="p-5 m-5" style="height: 500px;text-align: center;">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h1>404 not found</h1>
                                            <p>No Templates, Nothing to do!</p>
                                        </div>
                                    </div>
                                </div>
                            </section>';
                        include 'views/layouts/footer.php';
                    }
                }
            } else {
                include 'views/layouts/header.php';
                echo '<section class="p-5 m-5" style="height: 500px;text-align: center;">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h1>404 not found</h1>
                                        <p>No Templates, Nothing to do!</p>
                                    </div>
                                </div>
                            </div>
                        </section>';
                include 'views/layouts/footer.php';
            }
        }
    }
// if (in_array('id', $parseUrl)) {
    
//     if (in_array(dynamicModules()[0], $parseUrl)) {
//         /*
//         ** tentang page
//         */
//     } elseif (in_array(dynamicModules()[1], $parseUrl)) {
//         /*
//         ** units page
//         */
//     } elseif (in_array(dynamicModules()[2], $parseUrl)) {
//         /*
//         ** request-pricelist page
//         */
//     } elseif (in_array(dynamicModules()[3], $parseUrl)) {
//         /*
//         ** jurnal page
//         */
//     } else {
//         if (is_front_page() == 1) {

//         } else {
//             /*
//             ** This is Frontend Units Details
//             */ 
//             if (isset($post_data)) {
                
//             } else {
//                 include 'views/layouts/header.php';
//                 echo '<section class="p-5 m-5" style="height: 500px;text-align: center;">
//                             <div class="container">
//                                 <div class="row">
//                                     <div class="col-lg-12">
//                                         <h1>404 not found</h1>
//                                         <p>No Templates, Nothing to do!</p>
//                                     </div>
//                                 </div>
//                             </div>
//                         </section>';
//                 include 'views/layouts/footer.php';
//             }
//         }
//     }
// } else {
//     if (in_array(dynamicModules()[0], $parseUrl)) {
    
//         include 'views/layouts/header.php';

//         include 'models/frontModel.php';
//         include 'controllers/aboutController.php';
        
//         // include 'views/forms/request-brochure.php';
//         include 'views/page-about.php';

//         include 'views/layouts/footer.php';

//     } elseif (in_array(dynamicModules()[1], $parseUrl)) {
//         include 'views/layouts/header.php';

//         include 'models/frontModel.php';
//         include 'controllers/unitController.php';
//         include 'views/page-units.php';

//         include 'views/layouts/footer.php';

//     } elseif (in_array(dynamicModules()[2], $parseUrl)) {
//         include 'views/layouts/header.php';

//         include 'models/frontModel.php';
//         include 'controllers/requestPricelistController.php';
//         include 'views/page-request-pricelist.php';

//         include 'views/layouts/footer.php';

//     } elseif (in_array(dynamicModules()[3], $parseUrl)) {
        
//         include 'views/layouts/header.php';

//         include 'models/frontModel.php';
//         include 'controllers/journalController.php';
//         include 'views/page-journal.php';

//         include 'views/layouts/footer.php';

//     } else {
        
//         if (is_front_page() == 1) {
//             include 'views/layouts/header.php';

//             include 'models/frontModel.php';
//             include 'controllers/homeController.php';
            
//             include 'views/forms/request-brochure.php';
//             include 'views/page-homepage.php';
            
//             include 'views/layouts/footer.php';
//         } else {
            
//             /*
//             ** This is Frontend Units Details
//             */ 
//             if (isset($post_data)) {
                
//                 $categories = ['terra', 'avana', 'integra'];
                
//                 if (in_array($post_data->post_name, $categories)) {
//                     include 'views/layouts/header.php';

//                     include 'models/frontModel.php';
//                     include 'controllers/unitController.php';

//                     include 'views/page-unit-detail.php';

//                     include 'views/layouts/footer.php';
//                 } else {
//                     if (!empty($post_data)) {
//                         include 'views/layouts/header.php';

//                         include 'models/frontModel.php';
//                         include 'controllers/journalController.php';

//                         include 'views/page-journal-detail.php';

//                         include 'views/layouts/footer.php';
//                     } else {
//                         include 'views/layouts/header.php';
//                         echo '<section class="p-5 m-5" style="height: 500px;text-align: center;">
//                                 <div class="container">
//                                     <div class="row">
//                                         <div class="col-lg-12">
//                                             <h1>404 not found</h1>
//                                             <p>No Templates, Nothing to do!</p>
//                                         </div>
//                                     </div>
//                                 </div>
//                             </section>';
//                         include 'views/layouts/footer.php';
//                     }
//                 }
//             } else {
//                 include 'views/layouts/header.php';
//                 echo '<section class="p-5 m-5" style="height: 500px;text-align: center;">
//                             <div class="container">
//                                 <div class="row">
//                                     <div class="col-lg-12">
//                                         <h1>404 not found</h1>
//                                         <p>No Templates, Nothing to do!</p>
//                                     </div>
//                                 </div>
//                             </div>
//                         </section>';
//                 include 'views/layouts/footer.php';
//             }
//         }
//     }
// }

?>