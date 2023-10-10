var demo = angular.module("demo", []);

demo.controller("Ctrl",

function Ctrl($scope) {
    $scope.model = {
        contacts: [{
            id: 1,
            Nume: "Ben",
            Data_nota: 12,
            Nota: 3
        }, {
            id: 2,
            Nume: "Sally",
            Data_nota: 104,
            Nota: 9
        }, {
            id: 3,
            Nume: "John",
            Data_nota: 132,
            Nota: 2
        }, {
            id: 4,
            Nume: "Jane",
            Data_nota: 400,
            Nota: 28
        }],
        selected: {}
    };

    // gets the template to ng-include for a table row / item
    $scope.getTemplate = function (contact) {
        if (contact.id === $scope.model.selected.id) return 'edit';
        else return 'display';
    };

    $scope.editContact = function (contact) {
        $scope.model.selected = angular.copy(contact);
    };

    $scope.saveContact = function (idx) {
        console.log("Saving contact");
        $scope.model.contacts[idx] = angular.copy($scope.model.selected);
        $scope.reset();
    };

    $scope.reset = function () {
        $scope.model.selected = {};
    };
});