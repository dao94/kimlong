// "use strict";

idsCore
    .controller('SettingsController', [
        '$scope','$http', '$restful','$modal','growl', 'FileUploader', 'CSRF_TOKEN',  '$interval',
            function ($scope, $http, $restful, $modal,growl, FileUploader, CSRF_TOKEN, $interval) {

            $scope.data = {};
            $scope.savedData  = {};

            $http({
                method  : 'GET',
                url     : base_url+'setting',
                dataType: 'json'
            }).success(function (result){
                $scope.data = result.data;
            }).error(function (err){
                growl.warning("Lỗi !");
                console.log(err);
            });

            
            $scope.keyPress = function (key, $event){
                $scope.savedData[key] = $scope.data[key];
            }


            var uploader_banner = $scope.uploader_banner = new FileUploader({
                url         : base_url + 'upload',
                alias       : 'newsFile',
                formData    : [
                    {
                        key : 'request'
                    }
                ],
                headers     :{'X-CSRF-TOKEN' : CSRF_TOKEN }
            });


            uploader_banner.filters.push({
                name: 'customFilter',
                fn: function(item, options) {
                    return this.queue.length < 2;
                }
            });

            uploader_banner.onAfterAddingFile = function(fileItem) {
                uploader_banner.uploadAll();
            };

            uploader_banner.onCompleteItem = function(fileItem, response, status, headers) {
                if(!response.error){
                    $scope.data.banner = response.data;
                    $scope.savedData.banner = response.data;
                }
            };



            var uploader_logo = $scope.uploader_logo = new FileUploader({
                url         : base_url + 'upload',
                alias       : 'newsFile',
                formData    : [
                    {
                        key : 'request'
                    }
                ],
                headers     :{'X-CSRF-TOKEN' : CSRF_TOKEN }
            });


            uploader_logo.filters.push({
                name: 'customFilter',
                fn: function(item, options) {
                    return this.queue.length < 2;
                }
            });

            uploader_logo.onAfterAddingFile = function(fileItem) {
                uploader_logo.uploadAll();
            };

            uploader_logo.onCompleteItem = function(fileItem, response, status, headers) {
                if(!response.error){
                    $scope.data.logo = response.data;
                    $scope.savedData.logo = response.data;
                }
            };

            $scope.postSave = function (){
                $http({
                    method   : 'POST',
                    url      : base_url+'setting/save',
                    data     : $scope.savedData,
                    dataType : 'json'
                }).success(function (result){
                    if(!result.error){
                        growl.success("Cập nhật thành công");
                    }else {
                        growl.warning("Cập nhật thất bại");
                    }
                }).error(function (err){
                    growl.warning("Cập nhật thất bại");
                    console.log(err);
                });
            }
    }])