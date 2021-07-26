<?php 
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
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
            if(!isset($r['email']) || !isset($r['name']) || !isset($r['cart'])) {
                return new WP_Error('broke', 'Die eingegebenen Daten sind unvollständig.');
            }
            $mail = $this->send_mail($r);
            if($mail) return wp_send_json_success("Mail erfolgreich versandt.");
            return new WP_Error('broke', 'Fehler beim Versenden der Anfrage');
        }

        public function send_mail($r) {
            date_default_timezone_set ( 'Europe/Berlin' );
            $behandlungen = $r['cart'];
            $name = $r['name'];
            $email = $r['email'];
            $start = $r['start'];
            $end = $r['end'];

            $now = date("d.m.Y – H:i");
            ob_start();
            include 'whr-anfrage-mail.php';
            $content = ob_get_clean();
            $to = 'beauty@weinromantikhotel.de';
     

            $subject = 'Neue Behandlunganfrage - Weinromantikhotel';
            $headers = array('Content-Type: text/html; charset=UTF-8');
            return wp_mail( $to, $subject, $content, $headers );
        }
    }
    new WHR_Anfrage();