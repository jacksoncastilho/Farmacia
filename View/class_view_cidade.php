<?php

/**
 * View de cidade
 * @package Farmacia
 * @subpackage View
 * @author Jackson Castilho
 * @since 26/08/2021
 */
class ViewCidade {

    public function montaTelaCidade() {
        ?>
        <html>
            <body>
                <h3>Cidade</h3>
                <hr/>
                <nav> Nome:
                <input type='text' name='nome' id='nome' maxlength='50'/>
                </nav>
                <input type='submit' name='submit' id='submit' value='Cadastrar'/>
                <hr/>
                <table>
                    <tr>
                        <th>Codigo</th>
                        <th>Nome</th>
                    </tr>
                    <tr>
                        <td>1</th>
                        <td>Nome</th>
                    </tr>
                    <tr>
                        <td>2</th>
                        <td>Nome</th>
                    </tr>
                </table>
            <body>
        </html>
        <?php
    }

}
