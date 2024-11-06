function calcular() {
    const velocidade = document.getElementById('velocidade').value;
    const volumePorHectare = document.getElementById('volumePorHectare').value;
    const volumeTanque = document.getElementById('volumeTanque').value;
    const numBicos = document.getElementById('numBicos').value;
    const areaAplicada = document.getElementById('areaAplicada').value;

    const larguraBicos = numBicos * 0.5; // Convertendo cm para metros
    const velocidadeMetrosPorMinuto = (velocidade * 1000) / 60; // Convertendo km/h para m/min
    const areaCobertaPorMinuto = larguraBicos * velocidadeMetrosPorMinuto / 10000; // Convertendo m² para hectares
    const litrosPorMinuto = volumePorHectare * areaCobertaPorMinuto;
    const produtoPorHectare = volumeTanque / volumePorHectare;
    const litrosPorBico30s = (litrosPorMinuto / numBicos) * 0.5; // 30 segundos
    const litrosPorBico60s = (litrosPorMinuto / numBicos); // 60 segundos
    const tanquesNecessarios = Math.ceil(areaAplicada / produtoPorHectare);

    document.getElementById('resultado').innerText = 
        `Litros por Minuto: ${litrosPorMinuto.toFixed(2)} L/min\n` +
        `Área Aplicada com Tanque: ${produtoPorHectare.toFixed(0)} ha\n` +
        `Total de Tanques nessa área: ${tanquesNecessarios} \n`+
        `Litros por Bico (30 segundos): ${litrosPorBico30s.toFixed(3)} L\n` +
        `Litros por Bico (60 segundos): ${litrosPorBico60s.toFixed(3)} L\n` ;
        
}
