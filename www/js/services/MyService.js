var myApp = angular.module('MyApp');

myApp.factory('MyService', function($http)
{
	var service = {};

    service.load = function() {

        // var data = [];
        // data.children = service.listChildrenJson();
        // data.parents = service.listParentJson();
        // data.grandchildren = service.listGrandchildrenJson();

        return $http.get('../../php/testapi.php').then(

            function(result) {

                if (result.data) {

                    var data = result.data;
                    data.children = service.listChildrenJson();
                    data.parents = service.listParentJson();
                    //data.grandchildren = service.listGrandchildrenJson();

                    return data;
                } else {

                    return $q.reject();
                }
            });

        //return data;
    };

    service.listParentJson = function() {

        var data = [{id:0, name:"All", content:"",parent_id:null},
                    {id:1,name:"Tutuila",content:"Sua ma le Vaifanua, Fofo ma Aitulagi, Itu'au ma Alataua, Sa'ole ma le Saleaaumua, ma le Launiusaelua"},
                    {id:2,name:"Upolu",content:"Tumua ma Pule, Itu'au ma Alatau, Aiga i le Tai ma le Va'a o Fonoti"},
                    {id:3,name:"Savai'i",content:"Pule e ono"}];

        return data;
    };

    service.listChildrenJson = function() {

        var data = [{id:0, name:"All", content:"",parent_id:null},
                    {id:1,name:"Ma'oputasi",content:"Afio mai Ma'opu", parent_id:1},
                    {id:2,name:"Sa'ole",content:"Upu a Sa'ole", parent_id:1},
                    {id:3,name:"Three",content:"Child Three Desc", parent_id:2}];

        return data;
    };

    service.listGrandchildrenJson = function() {

        var data = [];
        var as = new Aua();
        data.push(as.getAuaContent());
        data.push(as.getLeloaloaContent());

        // var data = [{id:1,name:"Aua",
        //                 content:[{"Fa'alupega":["Afio mai le Sa'ousoali'i o Unutoa, Le tama aitu ma tagata",
        //                         "Le Matua or Lifau ma Liufau",
        //                         "Susu mai Ali'i of le Faleono"]},
        //                         {"Malaefono":["Paepaeulupo'o"]}],
        //                 parent_id:1},
        //             {id:2,name:"Leloaloa",
        //                 content:"Afio mai Ma'opu(Faumuina ma Uti), Afio mai le ali'i o le Ao(Vaivao)",
        //                 parent_id:1},
        //             {id:3,name:"Amouli", content:"Afio mai Utu ma le Suafa o Gogo, Ali'i o le Faleono", parent_id:2}];

        return data;
    };

    return service;
});

