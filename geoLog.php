<?php
/**
 * Função para obter informações de localização com base no IP do usuário.
 *
 * @param string $ip_addr Endereço IP a ser consultado.
 * @return array Dados de localização ou valores padrão em caso de falha.
 */
function obterDadosGeolocalizacao(string $ip_addr): array {
    // $url = "http://ip-api.com/json/$ip_addr?fields=258047&lang=pt-BR";

    $ch = curl_init('http://ip-api.com/json/24.48.0.1');
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_CUSTOMREQUEST  => "GET",
        CURLOPT_TIMEOUT        => 5, // Timeout de 5 segundos
    ]);

    $resultado = json_decode(curl_exec($ch), true);
    $erro = curl_error($ch);
    curl_close($ch);

    // Verifica se houve erro na execução do cURL
    if ($erro || empty($resultado) || $resultado['status'] !== 'success') {
        return [
            'pais'               => "Não localizado",
            'regiao'             => "Não localizado",
            'cidade'             => "Não localizado",
            'lat'                => "Não localizado",
            'long'               => "Não localizado",
            'isp'                => "Não localizado",
            'org'                => "Não localizado",
            'inst'               => "Não localizado",
            'nivel_log_registro' => "warning",
        ];
    }

    // Retorna os dados da API
    return [
        'pais'               => $resultado['country'],
        'regiao'             => $resultado['regionName'],
        'cidade'             => $resultado['city'],
        'lat'                => $resultado['lat'],
        'long'               => $resultado['lon'],
        'isp'                => $resultado['isp'],
        'org'                => $resultado['org'],
        'inst'               => $resultado['as'],
        'nivel_log_registro' => "info",
    ];
}

// Uso da função
$ip_addr = $_SERVER['REMOTE_ADDR'];
$dados_localizacao = obterDadosGeolocalizacao($ip_addr);

header('Content-Type: application/json');
// Exemplo de saída para debug
echo json_encode($dados_localizacao, JSON_PRETTY_PRINT);