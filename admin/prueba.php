   $servername = "localhost";
                            $username = "root";
                            $password = "";
                            $dbname = "helpdesk";

                            $asignar_ticket = $_POST['asignar_ticket']; // Suponiendo que el valor se envía a través de un formulario POST
                
                            try {
                                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                $stmt = $conn->prepare("SELECT * FROM tbl_ticket WHERE asignar_ticket = :asignar_ticket");
                                $stmt->bindParam(':asignar_ticket', $asignar_ticket);
                                $stmt->execute();

                                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

                                // Generar la tabla HTML con los resultados
                                echo '<table>';
                                echo '<tr><th>ID</th><th>Asignar Ticket</th><th>Otro campo</th></tr>';

                                foreach ($result as $row) {
                                    echo '<tr>';
                                    echo '<td>' . $row['id'] . '</td>';
                                    echo '<td>' . $row['asignar_ticket'] . '</td>';
                                    echo '<td>' . $row['otro_campo'] . '</td>';
                                    echo '</tr>';
                                }

                                echo '</table>';
                            } catch (PDOException $e) {
                                echo "Error: " . $e->getMessage();
                            }

                            $conn = null;
