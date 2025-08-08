require_once("ultramsg.class.php");

$ultramsg_token = "o666wncqciemgutn"; // seu token
$instance_id = "instance138279"; // sua instância
$client = new UltraMsg\WhatsAppApi($ultramsg_token, $instance_id);

$to = "5511974763839"; // seu número
$body = "Abertura de Mercado – AQuant Inteligência de Mercado
Data: 08/08/2025

USD/BRL: R$ 5,423 (-0,74%)
EUR/BRL: R$ 6,323 (-0,43%)
BTC/BRL: R$ 632.000 (-1,22%)

🇧🇷 Brasil:
• Ibovespa fechou em 136.527 pts (+1,48%), puxado por Eletrobras e Suzano.
• Tarifaço dos EUA reduz prêmio de risco, ajudando real e bolsa.
• Governo descarta retaliação imediata e acalma mercado.

🌍 Internacional:
• Futuros NY em alta após indicação de Stephen Miran ao Fed.
• Commodities mistas: WTI US$ 63,73 (-0,23%), Brent US$ 66,34 (-0,14%).
• Bitcoin US$ 116.540 (-0,48%), DXY 98,17 (-0,01%).

🏛 Política:
• Brasil aciona OMC contra tarifas de 50% dos EUA.
• EUA criticam prisão domiciliar de Bolsonaro; analistas veem ruído de curto prazo.
• Ruído político não altera tendência dos ativos no curto prazo.";

$api = $client->sendChatMessage($to, $body);
print_r($api);
