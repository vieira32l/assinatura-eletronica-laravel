<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Assinatura Digital</title>
    </head>
    <style>
        h2 {
            text-align: center;
        }

        hr{
            border-color:#aaa;
            box-sizing:border-box;
            width:100%;  
        }

        table {
          font-family: arial, sans-serif;
          border-collapse: collapse;
          width: 100%;
        }
        
        td, th {
          border: 1px solid #dddddd;
          text-align: left;
          padding: 8px;
        }
        
        tr:nth-child(even) {
          background-color: #dddddd;
        }
        </style>
    <body>
        <h2>Relatorio de Registro de Jornada - 12/01/2023 à 12/01/2023</h2>

        <hr/>

        <h5><strong>Período:</strong> 12/01/2023 à 12/01/2023</h5>

        <table>
        <tr>
            <th>Dia</th>
            <th>Motorista/Ajudante</th>
            <th>Número Romaneio</th>
            <th>Início Jornada</th>
            <th>Fim Jornada</th>
            <th>Local Última Jornada</th>
            <th>Início Direção</th>
            <th>Final Direção</th>
            <th>Primeira Entrega</th>
            <th>Última Entrega</th>
            <th>Local Última Entrega</th>
            <th>Destino</th>
            <th>Placa</th>
            <th>H.E</th>
        </tr>
        <tr>
            <td>12/01/2023</td>
            <td>M- 710277 - JOAQUIM MARIANO COSTA</td>
            <td>@RDCBRK@570782=00,309856</td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td>21:00:00</td>
            <td>10:15:16</td>
            <td> </td>
            <td> </td>
            <td>114 - BRK/114 - GOI</td>
            <td>PRG7628</td>
            <td> </td>
        </tr>
        </table>
        <footer></footer>
    </body>
</html>
