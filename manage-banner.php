<?php

/*
Plugin Name: ManageBanner
Plugin URI: http://www.nacaolivre.com.br
Description: Gerenciador de blocos de banners para exibição nos temas do wordpress.
Author: Fernando S. Rodrigues
Version: 0.0.1
Author URI: http://www.nacaolivre.com.br/
*/


class ManageBanner {

    /**
     * Constante de caminho para os plugin.
     *
     * @staticvar string MANAGE_BANNER_PATH
     *
     */
    const MANAGE_BANNER_PATH = '/wp-content/plugins/manage-banner/';


    /**
     * Efetua a instalação de estrutura de diretórios necessária para o devido
     * funcionamento do plugin.
     *
     * @param void
     * @return void
     * @since 2.0.1
     *
     */
    public static function install(){
        // Verifica a existencia do diretório content.
        if(! file_exists(ABSPATH.ManageBanner::MANAGE_BANNER_PATH.'content')){
            @mkdir(ABSPATH.ManageBanner::MANAGE_BANNER_PATH.'content', 0777);
            @chmod(ABSPATH.ManageBanner::MANAGE_BANNER_PATH.'content', 0777);
        }

        // Verifica a existencia do diretório adsense.
        if(! file_exists(ABSPATH.ManageBanner::MANAGE_BANNER_PATH.'content/adsense')){
            @mkdir(ABSPATH.ManageBanner::MANAGE_BANNER_PATH.'content/adsense', 0777);
            @chmod(ABSPATH.ManageBanner::MANAGE_BANNER_PATH.'content/adsense', 0777);
        }
    }


    /**
     * Método responsavel pela inicialização e configuração
     * dos ganchos no wordpress.
     *
     * @method initialize()
     * @param void
     * @return void
     * @since 1.0.0
     *
     */
    public static function initialize(){
        //	define os ganchos para conexão com as funções do wordpress.
        add_action('admin_init', array('ManageBanner', 'javascript'));
        add_action('admin_menu', array('ManageBanner', 'adminMenuAdd'));
    }


    /**
     * Configura a inicialização de scripts javascript para a área administrativa
     * do wordpress.
     *
     * @param void
     * @return void
     * @since 2.0.1
     *
     */
    public static function javascript(){
        // Desregistra o jquery padrão do worpress.
        wp_deregister_script( 'jquery' );
    }


    /**
     * Description Método responsavel por adicionar ao painel de controle do wordpress
     * a interface html contruida em control_panel.html existente no mesmo
     * diretório do plugin ManageBanner.
     *
     * @method PanelMenuAdd()
     * @param void
     * @return void
     * @since 1.0.0
     *
     */
    public static function adminMenuAdd(){
        add_options_page( 
            "Manage Banner",
            "Manage Banner",
            10,
            __FILE__,
            array(
                "ManageBanner",
                "adminManageBanner"
            )
        );
    }


    /**
     *	Método de carregamento e configuração do painel de controle
     *	do wordpress, dando interação entre o plugin e o usuário.
     *
     * @method PanelMenuOption()
     * @param void
     * @return void
     * @since 1.0.0
     */
    public static function adminManageBanner(){
        ?>
        <div class="wrap">
            <div id="icon-options-general" class="icon32"><br/></div>
            <h2>Gerenciar Banners</h2>
            <p>
                <b>Opções para o método "loadBanner" do plugin ManageBanner.</b>
                <br />
                <dl>                    
                    <dd style="color: red;">block_1</dd>
                    <dd style="color: red;">block_2</dd>
                    <dd style="color: red;">block_3</dd>
                    <dd style="color: red;">block_4</dd>
                    <dd style="color: red;">block_5</dd>
                </dl>
            </p>
            <p>
                Coloque o código abaixo no thema do seu wordpress para apresentar o conteúdo
                no <strong>blocos</strong> gravados:
            </p>
            <p><b>&lt;?php ManageBanner::loadBanner("block_1"); ?&gt;</b></p>
            <br />
            <div id="manage-banner">
                <object classid='clsid:d27cdb6e-ae6d-11cf-96b8-444553540000'
                        id='swfFileObject'
                        width='600px'
                        height='630px'
                        src='/wp-content/plugins/manage-banner/includes/ManageBanner.swf'
                        codebase='http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0'
                        align='middle'>
                    <param name='src' value='/wp-content/plugins/manage-banner/includes/ManageBanner.swf' />
                    <param name='base' value='/wp-content/plugins/manage-banner/includes' />
                    <param name='allowScriptAccess' value='always' />
                    <param name='movie' value='' />
                    <param name='menu' value='true' />
                    <param name='quality' value='high' />
                    <param name='scale' value='default' />
                    <param name='wmode' value='transparent' />
                    <param name='bgcolor' value='#FFFFFF' />
                    <param name='width' value='600px' />
                    <param name='height' value='630px' />
                    <param name='name' value='swfFileObject' />
                    <param name='align' value='middle' />
                    <param name='type' value='application/x-shockwave-flash' />
                    <param name='pluginspage' value='http://www.macromedia.com/go/getflashplayer' />
                    <embed src='/wp-content/plugins/manage-banner/includes/ManageBanner.swf'
                           base='/wp-content/plugins/manage-banner/includes'
                           menu='false'
                           quality='high'
                           scale='default'
                           bgcolor='#FFFFFF'
                           width='600px'
                           height='630px'
                           name='swfFileObject'
                           align='middle'
                           allowScriptAccess='always' type='application/x-shockwave-flash' 
                           pluginspage='http://www.macromedia.com/go/getflashplayer' wmode='transparent'>
                    </embed>
                </object>
            </div>
        </div>
        <?php
    }    


    /**
     * Manipula o conteúdo da postagem única para a ManageBanner dos blogs.
     *
     * @param string $html
     * @return string
     * @since 2.0.1
     *
     */
    public static function loadBanner( $index ){
        switch($index){
            case 'block_1':

                if(file_exists(ABSPATH.ManageBanner::MANAGE_BANNER_PATH."content/banners/block1.txt")){
                    $block1 = @file_get_contents(ABSPATH.ManageBanner::MANAGE_BANNER_PATH."content/banners/block1.txt");

                    print(stripslashes($block1));
                }

                break;

            case 'block_2':

                if(file_exists(ABSPATH.ManageBanner::MANAGE_BANNER_PATH."content/banners/block2.txt")){
                    $block2 = @file_get_contents(ABSPATH.ManageBanner::MANAGE_BANNER_PATH."content/banners/block2.txt");

                    print(stripslashes($block2));
                }

                break;

            case 'block_3':

                if(file_exists(ABSPATH.ManageBanner::MANAGE_BANNER_PATH."content/banners/block3.txt")){
                    $block3 = @file_get_contents(ABSPATH.ManageBanner::MANAGE_BANNER_PATH."content/banners/block3.txt");

                    print(stripslashes($block3));
                }

                break;

            case 'block_4':

                if(file_exists(ABSPATH.ManageBanner::MANAGE_BANNER_PATH."content/banners/block4.txt")){
                    $block4 = @file_get_contents(ABSPATH.ManageBanner::MANAGE_BANNER_PATH."content/banners/block4.txt");

                    print(stripslashes($block4));
                }

                break;

            case 'block_5':

                if(file_exists(ABSPATH.ManageBanner::MANAGE_BANNER_PATH."content/banners/block5.txt")){
                    $block5 = @file_get_contents(ABSPATH.ManageBanner::MANAGE_BANNER_PATH."content/banners/block5.txt");

                    print(stripslashes($block5));
                }

                break;

            default:

                if(file_exists(ABSPATH.ManageBanner::MANAGE_BANNER_PATH."content/banners/block1.txt")){
                    $block1 = @file_get_contents(ABSPATH.ManageBanner::MANAGE_BANNER_PATH."content/banners/block1.txt");

                    print($block1);
                }

                break;
        }
    }
}


/** Configura informações para o plugin. */
$plugin_file = substr( strrchr( dirname(__FILE__), DIRECTORY_SEPARATOR ), 1 ).
               DIRECTORY_SEPARATOR.basename( __FILE__ );


/**
 * função responsavel por efetuar a desinstalação do plugin no <wordpress>
 * Por problemas na desinstalação do hook por falta de suporte definido do wordpress o 
 * método do foi desabilitado.
 *
 * register_deactivation_hook($plugin_file, 'Uninstall' );
 */


/** Inicializa o plugin ManageBanner. */
register_activation_hook( $plugin_file, array( 'ManageBanner', 'install' ) );
add_filter( 'init', array( 'ManageBanner', 'initialize' ) );


?>
