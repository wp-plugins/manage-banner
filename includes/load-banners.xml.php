<?php

header ("content-type: text/xml");
echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>";
?>
<root>
    <block_1>
        <![CDATA[<?php            
            if(file_exists(dirname(dirname(__FILE__))."/content/adsense/block1.txt")){
                print(stripslashes(file_get_contents(dirname(dirname(__FILE__))."/content/adsense/block1.txt")));
                
            }            
        ?>]]>
    </block_1>
    <block_2>
        <![CDATA[<?php
            if(file_exists(dirname(dirname(__FILE__))."/content/adsense/block2.txt")){
                print(stripslashes(file_get_contents(dirname(dirname(__FILE__))."/content/adsense/block2.txt")));
            }
        ?>]]>
    </block_2>
    <block_3>
        <![CDATA[<?php
            if(file_exists(dirname(dirname(__FILE__))."/content/adsense/block3.txt")){
                print(stripslashes(file_get_contents(dirname(dirname(__FILE__))."/content/adsense/block3.txt")));
            }
        ?>]]>
    </block_3>
    <block_4>
        <![CDATA[<?php
            if(file_exists(dirname(dirname(__FILE__))."/content/adsense/block4.txt")){
                print(stripslashes(file_get_contents(dirname(dirname(__FILE__))."/content/adsense/block4.txt")));
            }
        ?>]]>
    </block_4>
    <block_5>
        <![CDATA[<?php
            if(file_exists(dirname(dirname(__FILE__))."/content/adsense/block5.txt")){
                print(stripslashes(file_get_contents(dirname(dirname(__FILE__))."/content/adsense/block5.txt")));
            }
        ?>]]>
    </block_5>
</root>