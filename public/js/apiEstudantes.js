// URL da API
const apiUrl = 'http://localhost:8000/api/students';

// Faz uma solicitação HTTP para a API
fetch(apiUrl)
  .then(response => response.json())
  .then(data => {
    // Cria uma tabela
    const table = document.createElement('table');

    // Adiciona o cabeçalho da tabela
    // const header = table.createTHead();
    // const headerRow = header.insertRow(0);
    // headerRow.insertCell(0).textContent = 'Nome';
    // headerRow.insertCell(1).textContent = 'Curso';

    // Adiciona os dados na tabela
    const tbody = table.createTBody();
    for (let i = 0; i < data.length; i++) {
      const row = tbody.insertRow(i);
      row.insertCell(0).textContent = data[i].name;
      row.insertCell(1).textContent = data[i].course;


    }

    // Adiciona a tabela na página
    document.body.appendChild(table);
  });
