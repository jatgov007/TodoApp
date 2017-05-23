<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html ng-app="todoApp">
    <head>
       
        <title>To Do App</title>
        <script src="angular.min.js"></script>
        <script src="app.js"></script>
    </head>
    
    <body>
        <h1>To Do App</h1>
        <div ng-controller="TodoCtrl as ctrl">
            
            <div>
                <p>Add ToDo:</p>
                <input type="text" ng-model="ctrl.newTodo"></div>
            <button ng-click="ctrl.addNewToDo()">Add</button>
            
            <div>
                <p>Your ToDo:</p>
                <button ng-hide="ctrl.editMode" ng-click="ctrl.triggerEditMode()">Edit</button>
                <button ng-show="ctrl.editMode" ng-click="ctrl.triggerEditMode()">Done</button>
                <ol>
                    <li ng-repeat="todo in ctrl.todos track by $index">
                        <span ng-hide="ctrl.editMode" ng-bind="todo"></span>
                        <input ng-model="todo" ng-show="ctrl.editMode" type="text"></input>
                        <button ng-hide="ctrl.editMode" ng-click="ctrl.deleteToDo($index)">Delete</button>
                </li>
                </ol>
            </div>
            
        </div>
          
        
    </body>
</html>
