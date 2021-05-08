<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto"
    />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    
    <title>Document</title>
  </head>
  <body>
        <div class="container">
    <div class="row my-4">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">add a flight</div>
                <div class="card-body bg-lights">
                    <a href="add">
                    <i class="fas fa-plus" style="font-size: 25px; margin-left:8px;color:blue;cursor:pointer;"></i>
                    </a>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th class="th-hover" scope="col">number of flight</th>
                                <th class="th-hover" scope="col">START</th>
                                <th class="th-hover" scope="col">END</th>
                                <th class="th-hover" scope="col">DAY</th>
                                <th class="th-hover" scope="col">TIME</th>
                                <th class="th-hover" scope="col">STATUS</th>
                            </tr>
                            <style>
                                body {
                                    background-color: rgb(36, 50, 74);
                                }
                                .table{
                                    margin-top: 1%;
                                }

                                .card {
                                    width: 111rem;
                                    position: relative;
                                    right: 53%;

                                }

                                .th-hover:hover {
                                    background-color: #f1f1f1;
                                }
                            </style>
                        </thead>
                        <tbody>
                            
                                <tr>
                                    <th scope="row">1</th>
                                    <td colspan="">14/05/2021</td>
                                    <td>20/05/2021</td>
                                    <td colspan="">6</td>
                                    <td>10:30</td>
                                    <td class="d-flex flex-row">
                                       
                                            <span class="badge badge-success">available</span>
                                            
                                            <!-- <span class="badge badge-failed">Full seats</span> -->
                                      
                                        <form class="mr-1" action="update" method="POST">
                                            <input type="hidden" name="id" value="">
                                            <button class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></button>
                                        </form>
                                        <form class="mr-1" action="delete" method="POST">
                                            <input type="hidden" name="id" value="">
                                            <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                        </form>
                                        <style>
                                            .badge-success {
                                                background-color: #01a101;
                                                height: 25px;
                                                width: 90px;
                                                position: relative;
                                                top: 6px;
                                                cursor: pointer;
                                            }

                                            button.btn.btn-sm.btn-warning {
                                                position: relative;
                                                left: 25px;
                                            }

                                            button.btn.btn-sm.btn-danger {
                                                position: relative;
                                                left: 45px;
                                            }

                                            .badge-failed {
                                                background-color: #e61a2d;
                                                height: 25px;
                                                width: 90px;
                                                position: relative;
                                                top: 6px;
                                                cursor: pointer;
                                            }
                                        </style>
                                    </td>
                                </tr>

                            
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>

  </body>
</html>
