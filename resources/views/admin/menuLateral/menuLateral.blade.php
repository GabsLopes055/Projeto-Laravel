<style>
    .nav {
        background-color: #F4F6F7;
        height: 100%;
        position: fixed;
        width: 80px;
    }

    .nav-item {
        margin-top: 30px;
    }

    .nav-link {
        text-decoration: none;
    }

    .main {
        margin-left: 80px;
    }

    .nav-item :hover {
        /* -webkit-transform: scale(0.2); */
        /* -ms-transform: scale(0.2); */
        transform: scale(1.2);

    }

</style>
<div class="container-fluid">
    <div class="row">
        <nav>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="{{ route('admin') }}" class="nav-link" id="dashboard"><img
                            src="https://img.icons8.com/color/48/000000/home.png" /></a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('vendas') }}" class="nav-link" id="vender"><img
                            src="https://img.icons8.com/color/48/000000/sell-stock.png" /></a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link" id="listarProdutos"><img
                            src="https://img.icons8.com/color/48/000000/add-list.png" /></a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link" id="graficos"><img
                            src="https://img.icons8.com/color/48/000000/pie-chart.png" /></a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link" id="cadastrarNotas"><img
                            src="https://img.icons8.com/color/48/000000/add-shopping-cart--v2.png" /></a>
                </li>
                <div>
                    <hr>
                </div>
                <li class="nav-item">
                    <a href="" class="nav-link"><img
                            src="https://img.icons8.com/color/48/000000/bar-chart--v2.png" /></a>
                </li>
            </ul>
        </nav>
    </div>
</div>
