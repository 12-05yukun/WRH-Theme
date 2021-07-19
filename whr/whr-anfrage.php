<?php 

    class WHR_Anfrage {
        public function __construct() {
            add_action('rest_api_init', array($this, 'register_rest_route'));
        }

        public function register_rest_route() {
            register_rest_route( 'whr/v1', '/behandlung', array(
                'methods' => 'POST',
                'callback' => array($this, 'handle_request'),
            ));
        }

        public function handle_request($r) {
            $mail = $this->send_mail($r);
            if($mail) return wp_send_json_success("Mail erfolgreich versandt.");
            return new WP_Error('broke', 'Fehler beim Versenden der Anfrage');
        }

        public function send_mail($r) {
            ob_start();
            include 'whr-anfrage-mail.php';
            $content = ob_get_clean();
            $to = 'm.westhofen@12-05.de';
            $subject = 'Neue Behandlungsanfrage auf www.weinromantikhotel.com';
            $headers = array('Content-Type: text/html; charset=UTF-8');
            return wp_mail( $to, $subject, $content, $headers );
        }
    }
    new WHR_Anfrage();