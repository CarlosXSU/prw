 <?php 

    $estado = $_POST['selEstado'];

    switch($estado){
        case "Acre" : echo "A capital do estado é: Rio Branco"; break;
        case "Alagoas" : echo "A capital do estado é: Maceió"; break;
        case "Amapá" : echo "A capital do estado é: Macapá"; break;
        case "Amazonas" : echo "A capital do estado é: Manaus"; break;
        case "Bahia" : echo "A capital do estado é: Salvador"; break;
        case "Ceará" : echo "A capital do estado é: Fortaleza"; break;
        case "Espírito Santo" : echo "A capital do estado é: Vitória"; break;
        case "Goiás" : echo "A capital do estado é: Goiânia"; break;
        case "Maranhão" : echo "A capital do estado é: São Luís"; break;
        case "Mato Grosso" : echo "A capital do estado é: Cuiabá"; break;
        case "Mato Grosso do Sul" : echo "A capital do estado é: Campo Grande"; break;
        case "Minas Gerais" : echo "A capital do estado é: Belo Horizonte"; break;
        case "Pará" : echo "A capital do estado é: Belém"; break;
        case "Paraíba" : echo "A capital do estado é: João Pessoa"; break;
        case "Paraná" : echo "A capital do estado é: Curitiba"; break;
        case "Pernambuco" : echo "A capital do estado é: Recife"; break;
        case "Piauí" : echo "A capital do estado é: Teresina"; break;
        case "Rio de Janeiro" : echo "A capital do estado é: Rio de Janeiro"; break;
        case "Rio Grande do Norte" : echo "A capital do estado é: Natal"; break;
        case "Rio Grande do Sul" : echo "A capital do estado é: Porto Alegre"; break;
        case "Rondônia" : echo "A capital do estado é: Porto Velho"; break;
        case "Roraima" : echo "A capital do estado é: Boa Vista"; break;
        case "Santa Catarina" : echo "A capital do estado é: Florianópolis"; break;
        case "São Paulo" : echo "A capital do estado é: São Paulo"; break;
        case "Sergipe" : echo "A capital do estado é: Aracaju"; break;
        case "Tocantins" : echo "A capital do estado é: Palmas"; break;
         default : echo "Você não selecionou um estado :("; break;

    }

?> 