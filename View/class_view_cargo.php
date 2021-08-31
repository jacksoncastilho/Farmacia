<?php

/**
 * View do cargo
 * @package Farmacia
 * @subpackage View
 * @author Jackson Castilho
 * @since 24/08/2021
 */
class ViewCargo {

    public function montaTelaCargo() {
        ?>
        <html>
            <body>
                <h3>Cargo</h3>
                <hr/>
                <nav> Nome:
                <input type='text' name='nome' id='nome' maxlength='50'/>
                </nav>
                <input type='submit' name='submit' id='submit' value='Cadastrar' />
                <br/>
                <hr/>
                <table border='1'>
                    <tr>
                        <th>
                            Código
                        </th>
                        <th>
                            Nome
                        </th>
                    </tr>
                    <tr>
                        <td>
                            1
                        </td>
                        <td>
                            Teste
                        </td>
                    </tr>
                    <tr>
                        <td>
                            2
                        </td>
                        <td>
                            Teste
                        </td>
                    </tr>
                </table>
            </body>
        </html>
        <?php
    }

}
