<?php
    // Observação NÃO COPIE  a super Tag do PHP 


    // Minha conta - Personalize o nome de usuário 

        function my_user_name() {
            $current_user = wp_get_current_user();
            return trim( '<b>Bem-vindo</b> ' . $current_user->user_firstname . ' ' . $current_user->user_lastname );
        }
        add_shortcode( 'my-user-name', 'my_user_name' );
        
        // Add o shortcode para fazer o logout de sua nova interface 
        function my_url_logout() {
            return wp_logout_url();
        }
        add_shortcode( 'my-url-logout', 'my_url_logout' );
        

        // Adicione um redirecionamento para o cliente ao fazer o logout
        add_action('wp_logout','my_redirect_after_logout');
        function my_redirect_after_logout(){
        wp_redirect( 'https://seusite.com.br/' ); //copie aqui a url da página na qual você quer fazer o redirecionamento
        exit();
        }


  ?>