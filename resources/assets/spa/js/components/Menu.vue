<template>
    <ul :id="o.id" class="dropdown-content" v-for="o in menusDropdown">
        <li v-for="item in o.items">
            <a v-link="{name:item.routeName}">{{item.name}}</a>
        </li>
    </ul>
    <ul id="dropdown-logout" class="dropdown-content">
        <li>
            <a v-link="{name: 'auth.logout'}">Sair</a>
        </li>
    </ul>

    <div class="navbar-fixed">
        <nav>
            <div class="nav-wrapper">
                <div class="col s12">
                    <a href="#" class="left brand-logo">Code Contas</a>
                    <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li v-for="o in menus">
                            <a v-if="o.dropdownId" class="dropdown-button" href="!#" :data-activates="o.dropdownId" >
                                {{o.name}} <i class="material-icons right">arrow_drop_down</i>
                            </a>
                            <a v-else v-link="{name:o.routeName}">{{o.name}}</a>
                        </li>
                        <li>
                            <a class="dropdown-button" href="!#" data-activates="dropdown-logout" >
                                {{name}} <i class="material-icons right">arrow_drop_down</i>
                            </a>
                        </li>
                    </ul>
                    <ul id="nav-mobile" class="side-nav">
                        <li v-for="o in menus">
                            <a v-link="{name:o.routeName}">{{o.name}}</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</template>

<script type="text/javascript">
    import Auth from  '../services/auth';
    export default {
        ready(){
            $('.button-collapse').sideNav();
            $('.dropdown-button').dropdown();

        },
        data()  {
            return  {
                menus: [
                    {name:"Dashboard", routeName:'dashboard'},
                    {name:'Contas a Pagar', routeName:'auth.login', dropdownId: 'bill-pay'},
                    {name:"Contas a Receber", routeName:"auth.login", dropdownId: 'bill-receive'}

                ],
                menusDropdown:  [
                    {
                        id: 'bill-pay', items: [
                        {id:0, name:"Listar Contas", routeName:'auth.login'},
                        {id:1, name:"Criar Conta", routeName:'auth.login'}
                    ]
                    },
                    {
                        id: 'bill-receive', items: [
                        {id:0, name:"Listar Contas", routeName:'auth.login'},
                        {id:1, name:"Criar Conta", routeName:'auth.login'}
                    ]
                    }


                ],
                user: Auth.user
            };
        },
        computed: {
            name() {
                return this.user.data ? this.user.data.name : ''
            }
        }
    };

</script>

