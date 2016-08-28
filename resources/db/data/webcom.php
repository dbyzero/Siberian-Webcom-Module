<?php
# Job module, data.
$name = "webcom";
$category = "social";

# Icons, the first icon is set as default for the Feature, 
# then all the icons are inserted in a library
$icons = array(
    "/app/local/modules/Webcom/resources/media/library/webcom.png"
);

$result = Siberian_Feature::installIcons($name, $icons);

# Install the Feature
$data = array(
    "library_id"                    => $result["library_id"],
    "icon_id"                       => $result["icon_id"],
    "code"                          => "Webcom",
    "name"                          => $name,                   
    "desktop_uri"                   => "webcom/application/",
    "mobile_uri"                    => "webcom/mobile_view/",
    "only_once"                     => 0,
    "is_ajax"                       => 1,           
    'position'                      => 240
);

$option = Siberian_Feature::install($category, $data, array("code"));

# Multiple layouts
#
# If your feature have multiple layouts, use the following section, otherwise skip it
# Layouts
#$layout_data = array(1, 2);
#$slug = "webcom";

#Siberian_Feature::installLayouts($option->getId(), $slug, $layout_data);
# !Multiple layouts

# This section duplicates the icons for the Flat design, you can have different icons, 
# or use the same, however since 4.2 you must write this section
# Icons
$icons = array(
    "/app/local/modules/Webcom/resources/media/library/webcom.png"
);

$result = Siberian_Feature::installIcons("{$name}-flat", $icons);