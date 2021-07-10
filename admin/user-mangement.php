<?php $title="User Management"; include 'layout.php';?>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4 capital">user management</h1>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                User Detail
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>User ID</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Contact</th>
                                            <th>Email</th>
                                            <th>Password</th>
											<th>Address</th>
											<th>Pincode</th>
											<th>Company Name</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>User ID</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Contact</th>
                                            <th>Email</th>
                                            <th>Password</th>
											<th>Address</th>
											<th>Pincode</th>
											<th>Company Name</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Dev</td>
                                            <td>Desai</td>
                                            <td>6134267843</td>
											<td>dev77@gmail.com</td>
                                            <td>dev123</td>
                                            <td>23/C, vinus parkland, vejalpur.</td>
											<td>380051</td>
											<td>Himalaya Hub</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Vivek</td>
                                            <td>Chodhri</td>
                                            <td>9134267843</td>
											<td>vivek78@gmail.com</td>
                                            <td>dev123</td>
                                            <td>101/A, Gokul, Nr StarBazar, Jodhpur.</td>
											<td>380015</td>
											<td>Elegance Company</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Jainam</td>
                                            <td>Chavda</td>
                                            <td>6334267843</td>
											<td>jainam11@gmail.com</td>
                                            <td>jainam11</td>
                                            <td>76, Shilp Duplex, vejalpur.</td>
											<td>380051</td>
											<td>Corporate Hub</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Damodar</td>
                                            <td>bhatt</td>
                                            <td>9832167843</td>
											<td>damodar4@gmail.com</td>
                                            <td>damodar123</td>
                                            <td>77A,Ramdev Park,Nr.Judges Banglow, Bodakdev.</td>
											<td>380018</td>
											<td>Ganesha</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Aditya</td>
                                            <td>Sharma</td>
                                            <td>9884267843</td>
											<td>aditya77@gmail.com</td>
                                            <td>aditya123</td>
                                            <td>23/C, Shree Hari park, vejalpur.</td>
											<td>380051</td>
											<td>Vishal Hub</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Meet</td>
                                            <td>Joshi</td>
                                            <td>9555267843</td>
											<td>meet67@gmail.com</td>
                                            <td>meet123</td>
                                            <td>404/1, Taksh Shila, Thaltej.</td>
											<td>380052</td>
											<td>Zeal Industry</td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>Devendra</td>
                                            <td>Yadav</td>
                                            <td>8134267843</td>
											<td>dev17@gmail.com</td>
                                            <td>devendra123</td>
                                            <td>303B, vinus parkland, vejalpur.</td>
											<td>380051</td>
											<td>Umya Corporate Hub</td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>Rahil</td>
                                            <td>Chotani</td>
                                            <td>6934267843</td>
											<td>Rahil77@gmail.com</td>
                                            <td>Rahil123</td>
                                            <td>802, Divyesh park, Bodakdev.</td>
											<td>380018</td>
											<td>Al Bihari Company</td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td>Kavit</td>
                                            <td>Jhala</td>
                                            <td>9934267843</td>
											<td>Kavit77@gmail.com</td>
                                            <td>kavit123</td>
                                            <td>76/C, Shubh Darshan Flat, Jodhpur.</td>
											<td>380015</td>
											<td>Shafal</td>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td>Abhinav</td>
                                            <td>Rajput</td>
                                            <td>9798433456</td>
											<td>abhivan77@gmail.com</td>
                                            <td>abhinav123</td>
                                            <td>204, D block,Avkar Banglo, Vejalpur.</td>
											<td>380051</td>
											<td>Naman Hub</td>
                                        </tr>

                                        <tr>
                                            <td>11</td>
                                            <td>Kavit</td>
                                            <td>Jhala</td>
                                            <td>9934267843</td>
											<td>Kavit77@gmail.com</td>
                                            <td>kavit123</td>
                                            <td>76/C, Shubh Darshan Flat, Jodhpur.</td>
											<td>380015</td>
											<td>Shafal</td>
                                        </tr>
                                        <tr>
                                            <td>12</td>
                                            <td>Abhinav</td>
                                            <td>Rajput</td>
                                            <td>9798433456</td>
											<td>abhivan77@gmail.com</td>
                                            <td>abhinav123</td>
                                            <td>204, D block,Avkar Banglo, Vejalpur.</td>
											<td>380051</td>
											<td>Naman Hub</td>
                                        </tr>
                                        
                                        <tr>
                                            <td>13</td>
                                            <td>Kavit</td>
                                            <td>Jhala</td>
                                            <td>9934267843</td>
											<td>Kavit77@gmail.com</td>
                                            <td>kavit123</td>
                                            <td>76/C, Shubh Darshan Flat, Jodhpur.</td>
											<td>380015</td>
											<td>Shafal</td>
                                        </tr>
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
 <?php include 'footer.php';?>