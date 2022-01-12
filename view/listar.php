<h3>Listar Clientes</h3>
<hr>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">COD</th>
            <th scope="col">Nome</th>
            <th scope="col">fone</th>
            <th scope="col">CPF</th>
            <th scope="col">
                <center>AÇÃO </center>
            </th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Rafael santos andrade</td>
            <td>32380973</td>
            <td>01321461348</td>
            <td>
                <center>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Visualizar <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                        </svg>
                    </button> |
                    <button type="button" class="btn btn-warning">Editar <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                            <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z" />
                        </svg>
                    </button> |
                    <button type="button" class="btn btn-danger">Apagar <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                            <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                        </svg>
                    </button>
                </center>
            </td>
        </tr>

    </tbody>
</table>


<div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-dialog modal-xl">

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">COD</th>
                            <th scope="col">Nome</th>
                            <th scope="col">fone</th>
                            <th scope="col">Email</th>
                            <th scope="col">C.E.P</th>
                            <th scope="col">Rua</th>
                            <th scope="col">Bairro</th>
                            <th scope="col">Complemento</th>
                            <th scope="col">Cidade</th>
                            <th scope="col">Estado</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Rafael Santos Andrade</td>
                            <td>32380973</td>
                            <td>fael.andrade0@gmail.com</td>
                            <td>6505476</td>
                            <td>24</td>
                            <td>Qd. 41</td>
                            <td>Cohatrac IV</td>
                            <td>São luis</td>
                            <td>MA</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Rafael Santos Andrade</td>
                            <td>32380973</td>
                            <td>fael.andrade0@gmail.com</td>
                            <td>6505476</td>
                            <td>24</td>
                            <td>Qd. 41</td>
                            <td>Cohatrac IV</td>
                            <td>São luis</td>
                            <td>MA</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Rafael Santos Andrade</td>
                            <td>32380973</td>
                            <td>fael.andrade0@gmail.com</td>
                            <td>6505476</td>
                            <td>24</td>
                            <td>Qd. 41</td>

                            <td>Cohatrac IV</td>
                            <td>São luis</td>
                            <td>MA</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                    Close
                </button>
            </div>
        </div>
    </div>
</div>