/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var app = angular.module("todoApp",[]);

app.controller("TodoCtrl",TodoCtrl);

function TodoCtrl(){
    
    this.editMode = false;
    this.todos = [
        "Learn Angular 1",
        "try out exercise",
        "visit java brain site"
    ];
    
    this.addNewToDo = function(){
        this.todos.push(this.newTodo);
        this.newTodo = "";
    }
    
    this.triggerEditMode = function(){
        this.editMode = !this.editMode;
    }
    
    this.deleteToDo = function(index){
        this.todos.splice(index,1);
    }
}

