/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./public/js/calendar.js":
/*!*******************************!*\
  !*** ./public/js/calendar.js ***!
  \*******************************/
/***/ (() => {

eval("document.addEventListener('DOMContentLoaded', function () {\n  var calendarEl = document.getElementById('calendar');\n  var calendar = new FullCalendar.Calendar(calendarEl, {\n    themeSystem: 'bootstrap5',\n    navLinks: true,\n    initialView: 'dayGridMonth',\n    locale: \"es\",\n    headerToolbar: {\n      left: \"prev,next today\",\n      center: \"title\",\n      right: \"dayGridMonth,timeGridWeek,timeGridDay\"\n    },\n    dateClick: function dateClick(info) {//$(\"#consulta\").modal(\"show\");\n    }\n  });\n  calendar.render();\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJuYW1lcyI6WyJkb2N1bWVudCIsImFkZEV2ZW50TGlzdGVuZXIiLCJjYWxlbmRhckVsIiwiZ2V0RWxlbWVudEJ5SWQiLCJjYWxlbmRhciIsIkZ1bGxDYWxlbmRhciIsIkNhbGVuZGFyIiwidGhlbWVTeXN0ZW0iLCJuYXZMaW5rcyIsImluaXRpYWxWaWV3IiwibG9jYWxlIiwiaGVhZGVyVG9vbGJhciIsImxlZnQiLCJjZW50ZXIiLCJyaWdodCIsImRhdGVDbGljayIsImluZm8iLCJyZW5kZXIiXSwic291cmNlcyI6WyJ3ZWJwYWNrOi8vLy4vcHVibGljL2pzL2NhbGVuZGFyLmpzP2Q3MTAiXSwic291cmNlc0NvbnRlbnQiOlsiZG9jdW1lbnQuYWRkRXZlbnRMaXN0ZW5lcignRE9NQ29udGVudExvYWRlZCcsIGZ1bmN0aW9uKCkge1xyXG4gICAgdmFyIGNhbGVuZGFyRWwgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnY2FsZW5kYXInKTtcclxuXHJcbiAgICB2YXIgY2FsZW5kYXIgPSBuZXcgRnVsbENhbGVuZGFyLkNhbGVuZGFyKGNhbGVuZGFyRWwsIHtcclxuICAgICAgICB0aGVtZVN5c3RlbTogJ2Jvb3RzdHJhcDUnLFxyXG4gICAgICAgIG5hdkxpbmtzOiB0cnVlLFxyXG5cclxuICAgICAgICBpbml0aWFsVmlldzogJ2RheUdyaWRNb250aCcsXHJcblxyXG4gICAgICAgIGxvY2FsZTogXCJlc1wiLFxyXG5cclxuICAgICAgICBoZWFkZXJUb29sYmFyOiB7XHJcbiAgICAgICAgICAgIGxlZnQ6IFwicHJldixuZXh0IHRvZGF5XCIsXHJcbiAgICAgICAgICAgIGNlbnRlcjogXCJ0aXRsZVwiLFxyXG4gICAgICAgICAgICByaWdodDogXCJkYXlHcmlkTW9udGgsdGltZUdyaWRXZWVrLHRpbWVHcmlkRGF5XCJcclxuICAgICAgICB9LFxyXG5cclxuICAgICAgICBkYXRlQ2xpY2s6IGZ1bmN0aW9uKGluZm8pIHtcclxuICAgICAgICAgICAgLy8kKFwiI2NvbnN1bHRhXCIpLm1vZGFsKFwic2hvd1wiKTtcclxuICAgICAgICB9XHJcblxyXG4gICAgfSk7XHJcblxyXG4gICAgY2FsZW5kYXIucmVuZGVyKCk7XHJcbn0pOyJdLCJtYXBwaW5ncyI6IkFBQUFBLFFBQVEsQ0FBQ0MsZ0JBQVQsQ0FBMEIsa0JBQTFCLEVBQThDLFlBQVc7RUFDckQsSUFBSUMsVUFBVSxHQUFHRixRQUFRLENBQUNHLGNBQVQsQ0FBd0IsVUFBeEIsQ0FBakI7RUFFQSxJQUFJQyxRQUFRLEdBQUcsSUFBSUMsWUFBWSxDQUFDQyxRQUFqQixDQUEwQkosVUFBMUIsRUFBc0M7SUFDakRLLFdBQVcsRUFBRSxZQURvQztJQUVqREMsUUFBUSxFQUFFLElBRnVDO0lBSWpEQyxXQUFXLEVBQUUsY0FKb0M7SUFNakRDLE1BQU0sRUFBRSxJQU55QztJQVFqREMsYUFBYSxFQUFFO01BQ1hDLElBQUksRUFBRSxpQkFESztNQUVYQyxNQUFNLEVBQUUsT0FGRztNQUdYQyxLQUFLLEVBQUU7SUFISSxDQVJrQztJQWNqREMsU0FBUyxFQUFFLG1CQUFTQyxJQUFULEVBQWUsQ0FDdEI7SUFDSDtFQWhCZ0QsQ0FBdEMsQ0FBZjtFQW9CQVosUUFBUSxDQUFDYSxNQUFUO0FBQ0gsQ0F4QkQiLCJmaWxlIjoiLi9wdWJsaWMvanMvY2FsZW5kYXIuanMuanMiLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./public/js/calendar.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./public/js/calendar.js"]();
/******/ 	
/******/ })()
;