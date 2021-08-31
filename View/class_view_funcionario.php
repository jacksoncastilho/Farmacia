<?php

/**
 * View de Funcionario
 * @package Farmacia
 * @subpackage View
 * @author Jackson Castilho
 * @since 26/08/2021
 */
class ViewFuncionario {
    
    public function montaTelaFuncionario() {
        ?>
        <html>
            <body>
                <h3>Funcionario</h3>
                <hr/>
                <nav> Nome:
                    <input type='text' name='nome' id='nome' maxlength='50'/>
                </nav>
                <nav> Cidade:
                <input type='numeric' name='codigo_cidade' id='codigo_cidade' min='1'/>
                </nav>
                <input type='submit' name='submit' id='submit' value='Cadastrar'/>
                <hr/>
                <table>
                    <tr>
                        <th>Codigo</th>
                        <th>Nome</th>
                        <th>Cidadde</th>
                    </tr>
                    <tr>
                        <td>
                            1
                        </td>
                        <td>
                            Teste
                        </td>
                        <td>
                            1
                        </td>
                    </tr>
                    <tr>
                        <td>
                            2
                        </td>
                        <td>
                            Teste
                        </td>
                        <td>
                            2
                        </td>
                    </tr>
                </table>
            </body>
        </html>
        <?php
    }

}
