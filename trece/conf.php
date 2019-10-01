<?php if(!defined("TRECE")):header("location:/");die();endif; ?>
<?php

return [

  "trece"       =>  [
# --------------------------------------------------------------------
    "flavour"   =>  "mini",  # http://mini.trece.io/
    "version"   =>  "0.15.80",  # http://mini.trece.io/changelog
    "motto"     =>  "The humblest start", # In other words: "Nailing perfection" ;-)
    "theme"     =>  $theme="minimal",
    "logo"      =>  [
        "black" =>  "zAwMCI",
        "white" =>  "2ZmZiI",
       "garnet" =>  "2M0MDI2OCI",
          "img" =>  "PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4KPHN2ZyB3aWR0aD0iMjgzLjQ2IiBoZWlnaHQ9Ijk3LjkwMyIgdmVyc2lvbj0iMS4xIiB2aWV3Qm94PSIwIDAgMjgzLjQ1OTY1IDk3LjkwMzQ2OSIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczpjYz0iaHR0cDovL2NyZWF0aXZlY29tbW9ucy5vcmcvbnMjIiB4bWxuczpkYz0iaHR0cDovL3B1cmwub3JnL2RjL2VsZW1lbnRzLzEuMS8iIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+PG1ldGFkYXRhPjxyZGY6UkRGPjxjYzpXb3JrIHJkZjphYm91dD0iIj48ZGM6Zm9ybWF0PmltYWdlL3N2Zyt4bWw8L2RjOmZvcm1hdD48ZGM6dHlwZSByZGY6cmVzb3VyY2U9Imh0dHA6Ly9wdXJsLm9yZy9kYy9kY21pdHlwZS9TdGlsbEltYWdlIi8+PGRjOnRpdGxlLz48L2NjOldvcms+PC9yZGY6UkRGPjwvbWV0YWRhdGE+PGcgdHJhbnNmb3JtPSJtYXRyaXgoMS4zMzMzIDAgMCAtMS4zMzMzIC0yNTQuNzQgNjA4Ljc0KSI+PGcgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTE2OTIsLTE1ODQpIj48cGF0aCBkPSJtMjA4Mi4yIDE5OTEuN2MwLjQ2MDcgMS40OTcxIDEuMzY3NiAyLjU2MjMgMi43MjA3IDMuMTk1N3MyLjcwNjMgMC44NDkzIDQuMDU5NCAwLjY0NzggMi40NDcyLTAuNzkxNyAzLjI4MjEtMS43NzA2IDAuOTY0NC0yLjMzMjEgMC4zODg2LTQuMDU5NWMtMS40Mzk1LTQuMTQ1OC0zLjMxMDgtNy42NDM5LTUuNjE0LTEwLjQ5NC0yLjMwMzMtMi44NTAzLTQuODY1Ni01LjE2NzktNy42ODctNi45NTI5cy01Ljc4NjgtMy4wODA2LTguODk2MS0zLjg4NjdjLTMuMTA5NC0wLjgwNjItNi4xNjExLTEuMjA5Mi05LjE1NTMtMS4yMDkyLTMuMTY2OSAwLTYuMTAzNSAwLjM4ODYtOC44MDk4IDEuMTY2LTIuNzA2MiAwLjc3NzMtNS4wNTI2IDEuOTAwMi03LjAzOTIgMy4zNjg1LTEuNDUwOSAxLjA3MjQtMi42NzkyIDIuMzA2MS0zLjY4NDggMy43MDExLTEuMDEzMS0wLjkyNDUtMi4wNzA3LTEuNzY5NS0zLjE3MjYtMi41MzUxLTIuNzM1MS0xLjkwMDItNS42NTczLTMuMzEwOS04Ljc2NjYtNC4yMzIyLTMuMTA5NC0wLjkyMTMtNi4yNDc1LTEuMzgyLTkuNDE0NC0xLjM4MnMtNi4wNjAzIDAuNDMxOS04LjY4MDIgMS4yOTU2LTQuODY1NSAyLjA0NDEtNi43MzY5IDMuNTQxMmMtMS4yMjkxIDAuOTgzMy0yLjI3ODEgMi4wOTctMy4xNDcxIDMuMzQxMi0xLjMxMTMtMS4xOTY0LTIuNjkwOC0yLjI1MjUtNC4xMzg1LTMuMTY4NC0yLjgyMTQtMS43ODUtNS43ODY4LTMuMDgwNi04Ljg5NjEtMy44ODY3LTMuMTA5NC0wLjgwNjItNi4xNjExLTEuMjA5Mi05LjE1NTMtMS4yMDkyLTMuMTY2OSAwLTYuMTAzNSAwLjM4ODYtOC44MDk4IDEuMTY2LTIuNzA2MiAwLjc3NzMtNS4wNTI2IDEuOTAwMi03LjAzOTIgMy4zNjg1LTEuMDk3OCAwLjgxMTQtMi4wNjgyIDEuNzE1Mi0yLjkxMTEgMi43MTEzLTAuMzUzLTAuMzg0Ny0wLjcxMjEtMC43NTU4LTEuMDc3NS0xLjExMzUtNC4wNTk0LTMuOTczLTguNDQ5OS01Ljk1OTYtMTMuMTcyLTUuOTU5Ni0xLjc4NSAwLTMuNDY5MiAwLjI5OTgtNS4wNTI3IDAuODk5NS0xLjU4MzQgMC41OTk2LTIuOTc5OCAxLjQyNzYtNC4xODg5IDIuNDgzOC0xLjIwOTIgMS4wNTYzLTIuMTU5MyAyLjM0MTEtMi44NTAzIDMuODU0NC0wLjY5MDkgMS41MTMzLTEuMDM2NCAzLjIxNzctMS4wMzY0IDUuMTEzNCAwIDEuNjY5OSAwLjM0NTUgMy41MTI1IDEuMDM2NCA1LjUyNzhsMy44MDAzIDEwLjUzN2MwLjM0NTUgMS4wMzY1IDAuMzg4NyAxLjg4NTggMC4xMjk2IDIuNTQ4cy0wLjY3NjYgMS4yMDkyLTEuMjUyNCAxLjY0MWMtMC41NzU4IDAuNDMxOS0xLjI1MjQgMC43NjMtMi4wMjk3IDAuOTkzM3MtMS41MTE1IDAuNDYwNy0yLjIwMjQgMC42OTFsLTQuMjk2LTExLjUwN2MtMC4wNDEtMC4xNjMtMC4wOS0wLjMyOTItMC4xNDYzLTAuNDk4Ni0yLjQ3Ni03LjE0MDEtNS45MDItMTIuNjM5LTEwLjI3OC0xNi40OTdzLTkuMzU2OC01Ljc4NjktMTQuOTQyLTUuNzg2OWMtMi4yNDU2IDAtNC4zNyAwLjMxNjctNi4zNzMyIDAuOTUwMS0yLjAwMzEgMC42MzM0LTMuNzYyNCAxLjU1NDctNS4yNzggMi43NjM5LTEuNTE1NSAxLjIwOTItMi43MzA4IDIuNjc3NS0zLjY0NTcgNC40MDQ5LTAuOTE1IDEuNzI3NC0xLjM3MjUgMy42ODUyLTEuMzcyNSA1Ljg3MzMgMCAxLjc4NSAwLjM0MzIgMy43MTM5IDEuMDI5NyA1Ljc4NjkgMC42Mjg4IDEuNzU2MiAxLjIyOTIgMy40NjkyIDEuODAwOSA1LjA1MjcgMC41NzE4IDEuNTgzNSAxLjEyOTQgMy4xNTI2IDEuNjcyOCA0LjcwNzMgMC4zOTEzIDEuMTE5NSA3LjI4OTQgMjAuNTEzIDExLjEyIDMxLjI4MmgtMTMuMDY1Yy04LjI4OTMgMC04LjI4OTMgMTIuNDM0IDAgMTIuNDM0aDIwMC4xNmM4LjI4OTMgMCA4LjI4OTMtMTIuNDM0IDAtMTIuNDM0aC0xNzQuMDRsLTE1LjgxMy00NC40NzljLTAuMjMwNC0wLjUxOTItMC4zNDU1LTEuMTU0NC0wLjM0NTUtMS45MDU2IDAtMS4xNTUyIDAuNDQ2Mi0yLjEzNyAxLjMzODctMi45NDU0czIuMTE2MS0xLjIxMjYgMy42NzA4LTEuMjEyNmMyLjUzMzUgMCA1LjA1MjYgMS4xMzcyIDcuNTU3NCAzLjQxMTcgMi41MDQ3IDIuMjc0NCA0LjYyMDggNS44MDEzIDYuMzQ4MiAxMC41OGwwLjE0MTQgMC4zNDk1IDUuODU1NSAxNS44MDJjLTEuNDM5NSAxLjc4NS0yLjE1OTIgMy44MjkxLTIuMTU5MiA2LjEzMjMgMCAwLjYzMzQgMC4wNzIgMS4zMjQ0IDAuMjE1OSAyLjA3MyAwLjE0MzkgMC43NDg1IDAuMzU5OCAxLjQzOTUgMC42NDc4IDIuMDcyOSAwLjQ2MDYgMS41NTQ2IDEuMzM4NyAyLjgyMTQgMi42MzQzIDMuODAwMyAxLjI5NTUgMC45Nzg5IDIuODM1OCAxLjQ2ODQgNC42MjA4IDEuNDY4NCAxLjE1MTYgMCAyLjI0NTYtMC4yNzM2IDMuMjgyMS0wLjgyMDYgMS4wMzY0LTAuNTQ3IDEuOTAwMS0xLjI2NjggMi41OTEtMi4xNTkzIDAuNjkxLTAuODkyNSAxLjE2NjEtMS45MDAyIDEuNDI1Mi0zLjAyM3MwLjE4NzEtMi4yODg4LTAuMjE2LTMuNDk4YzEuMjA5Mi0wLjM0NTUgMi42Nzc1LTAuODQ5NCA0LjQwNDktMS41MTE1IDEuNzI3NC0wLjY2MjIgMy4zOTczLTEuNTExNSA1LjAwOTUtMi41NDggMS42MTIzLTEuMDM2NCAyLjk3OTgtMi4yODg4IDQuMTAyNi0zLjc1NzIgMS4xMjI4LTEuNDY4MyAxLjY4NDItMy4yMzg5IDEuNjg0Mi01LjMxMTggMC0wLjc0ODYtMC4wNzItMS41MTE1LTAuMjE1OS0yLjI4ODgtMC4xNDM5LTAuNzc3NC0wLjM1OTktMS41OTc5LTAuNjQ3OC0yLjQ2MTZsLTUuMDk1OC0xNC4xNjVjLTAuMjMwMy0wLjYzMzQtMC4zNDU1LTEuMjY2Ny0wLjM0NTUtMS45MDAxczAuMTQzOS0xLjE2NiAwLjQzMTgtMS41OTc5YzAuMjg4LTAuNDMxOSAwLjc0ODYtMC42NDc4IDEuMzgyLTAuNjQ3OCAwLjkyMTMgMCAxLjg3MTMgMC4zNzQzIDIuODUwMiAxLjEyMjggMC45Nzg4IDAuNzQ4NiAxLjk1NzcgMS43NzA2IDIuOTM2NiAzLjA2NjIgMC45Nzg4IDEuMjk1NiAxLjk0MzMgMi44MzU5IDIuODkzNCA0LjYyMDlzMS44MjgyIDMuNzQyOCAyLjYzNDMgNS44NzMzYzAuMTIxIDAuNDA4MyAwLjI3MjcgMC43ODEgMC40NTUzIDEuMTE3OGwzLjk2NTIgMTEuNDkyYzAuNzQ4NiAyLjEzMDUgMS43NTYyIDQuMDE2MyAzLjAyMyA1LjY1NzMgMS4yNjY4IDEuNjQxMSAyLjcwNjIgMy4wMjMxIDQuMzE4NSA0LjE0NTlzMy4zNTQgMS45NTc3IDUuMjI1NCAyLjUwNDhjMS44NzE0IDAuNTQ3IDMuNzU3MSAwLjgyMDUgNS42NTczIDAuODIwNSAyLjQxODMgMCA0LjYzNTItMC4zNzQzIDYuNjUwNS0xLjEyMjggMi4wMTUzLTAuNzQ4NiAzLjcyODMtMS43NzA3IDUuMTM5LTMuMDY2MiAxLjQxMDctMS4yOTU2IDIuNTA0OC0yLjgyMTUgMy4yODIxLTQuNTc3N3MxLjE2Ni0zLjY3MDggMS4xNjYtNS43NDM3YzAtMS40Mzk2LTAuMjMwMy0zLjAyMy0wLjY5MDktNC43NTA1LTAuNTc1OS0xLjk1NzctMS40MjUyLTMuNzEzOS0yLjU0OC01LjI2ODZzLTIuNDMyNy0yLjg3OTEtMy45Mjk4LTMuOTczMWMtMS40OTcxLTEuMDk0MS0zLjE1MjYtMS45NDM0LTQuOTY2My0yLjU0OC0xLjgxMzgtMC42MDQ2LTMuNjk5Ni0wLjkwNjktNS42NTczLTAuOTA2OS0xLjcyNzQgMC0zLjM1NCAwLjIzMDMtNC44Nzk5IDAuNjkxLTEuNTI1OSAwLjQ2MDYtMi45MjIyIDEuMDk0LTQuMTg5IDEuOTAwMmwtMC42OTA5LTEuNjQxMWMtMC4yODgtMC43NDg2LTAuNDMxOS0xLjU1NDctMC40MzE5LTIuNDE4NCAwLTIuMDE1MyAwLjkyMTMtMy43MTQgMi43NjM4LTUuMDk1OSAxLjg0MjYtMS4zODIgNC4zNDc0LTIuMDcyOSA3LjUxNDMtMi4wNzI5IDEuODQyNSAwIDMuNzU3MSAwLjI3MzUgNS43NDM2IDAuODIwNXMzLjg4NjcgMS4zOTYzIDUuNzAwNSAyLjU0OGMxLjgxMzcgMS4xNTE2IDMuNDgzNiAyLjYxOTkgNS4wMDk0IDQuNDA0OSAxLjUwNTUgMS43NjExIDIuNzQ0OCAzLjg4NjcgMy43MTc4IDYuMzc2NWw0LjUxNzkgMTMuMzE2YzAuNzQ4NSAyLjI0NTcgMS43NzA2IDQuMjAzNCAzLjA2NjEgNS44NzMzIDEuMjk1NiAxLjY2OTggMi43MzUxIDMuMDM3NCA0LjMxODUgNC4xMDI2IDEuNTgzNSAxLjA2NTMgMy4yODIxIDEuODU3IDUuMDk1OSAyLjM3NTIgMS44MTM4IDAuNTE4MyAzLjY0MiAwLjc3NzQgNS40ODQ1IDAuNzc3NCAyLjM2MDggMCA0LjUwNTctMC41MTgyIDYuNDM0Ni0xLjU1NDcgMS45MjktMS4wMzY1IDMuNDgzNi0yLjQ0NzIgNC42NjQtNC4yMzIyczEuOTAwMi0zLjgyOTEgMi4xNTkzLTYuMTMyNGMwLjI1OTEtMi4zMDMyLTAuMDcyLTQuNzUwNC0wLjk5MzMtNy4zNDE2LTAuOTc4OC0yLjUzMzUtMi4zMTc2LTQuMTYwMi00LjAxNjItNC44OC0xLjY5ODYtMC43MTk3LTMuMjgyMS0wLjgyMDUtNC43NTA0LTAuMzAyMy0xLjQ2ODMgMC41MTgzLTIuNTc2NyAxLjQ4MjctMy4zMjUyIDIuODkzNS0wLjc0ODYgMS40MTA3LTAuNjkxIDIuOTc5OCAwLjE3MjcgNC43MDcyIDAuODA2MSAxLjQ5NzEgMS4wOTQgMi43OTI3IDAuODYzNyAzLjg4NjctMC4yMzAzIDEuMDk0MS0xLjAwNzYgMS42OTg3LTIuMzMyIDEuODEzOS0wLjc0ODUgMC4wNTctMS40OTcxLTAuMjE2LTIuMjQ1Ni0wLjgyMDYtMC43NDg2LTAuNjA0Ni0xLjMyNDQtMS40NTM5LTEuNzI3NC0yLjU0NzlsLTUuMzU1LTE0Ljk0MmMtMC4zNDU1LTEuMTUxNi0wLjUxODItMi4xODgxLTAuNTE4Mi0zLjEwOTQgMC0yLjE4ODEgMC44NzgxLTQuMDMwNyAyLjYzNDMtNS41Mjc4czQuMTMxNC0yLjI0NTYgNy4xMjU1LTIuMjQ1NmMxLjYxMjMgMCAzLjMyNTMgMC4yNzM1IDUuMTM5MSAwLjgyMDVzMy41ODQzIDEuNDI1MSA1LjMxMTggMi42MzQzYzEuNzI3NCAxLjIwOTIgMy4zNjg0IDIuNzc4MyA0LjkyMzEgNC43MDczIDEuNDEwNyAxLjc1MDMgMi42MzE2IDMuODQ0NCAzLjY2MzEgNi4yODIxbDQuNDAzNSAxMi43NjNjMC43NDg2IDIuMTMwNSAxLjc1NjIgNC4wMTYzIDMuMDIzIDUuNjU3MyAxLjI2NjcgMS42NDExIDIuNzA2MiAzLjAyMzEgNC4zMTg1IDQuMTQ1OSAxLjYxMjIgMS4xMjI4IDMuMzU0IDEuOTU3NyA1LjIyNTQgMi41MDQ4IDEuODcxNCAwLjU0NyAzLjc1NzEgMC44MjA1IDUuNjU3MyAwLjgyMDUgMi40MTgzIDAgNC42MzUyLTAuMzc0MyA2LjY1MDUtMS4xMjI4IDIuMDE1My0wLjc0ODYgMy43MjgzLTEuNzcwNyA1LjEzOS0zLjA2NjIgMS40MTA3LTEuMjk1NiAyLjUwNDctMi44MjE1IDMuMjgyMS00LjU3NzcgMC43NzczLTEuNzU2MiAxLjE2Ni0zLjY3MDggMS4xNjYtNS43NDM3IDAtMS40Mzk2LTAuMjMwMy0zLjAyMy0wLjY5MS00Ljc1MDUtMC41NzU4LTEuOTU3Ny0xLjQyNTEtMy43MTM5LTIuNTQ3OS01LjI2ODZzLTIuNDMyOC0yLjg3OTEtMy45Mjk5LTMuOTczMWMtMS40OTctMS4wOTQxLTMuMTUyNS0xLjk0MzQtNC45NjYyLTIuNTQ4LTEuODEzOC0wLjYwNDYtMy42OTk2LTAuOTA2OS01LjY1NzMtMC45MDY5LTEuNzI3NCAwLTMuMzU0MSAwLjIzMDMtNC44Nzk5IDAuNjkxLTEuNTI1OSAwLjQ2MDYtMi45MjIyIDEuMDk0LTQuMTg5IDEuOTAwMmwtMC42OTEtMS42NDExYy0wLjI4NzktMC43NDg2LTAuNDMxOC0xLjU1NDctMC40MzE4LTIuNDE4NCAwLTIuMDE1MyAwLjkyMTMtMy43MTQgMi43NjM4LTUuMDk1OSAxLjg0MjYtMS4zODIgNC4zNDczLTIuMDcyOSA3LjUxNDMtMi4wNzI5IDEuODQyNSAwIDMuNzU3MSAwLjI3MzUgNS43NDM2IDAuODIwNXMzLjg4NjcgMS4zOTYzIDUuNzAwNCAyLjU0OGMxLjgxMzggMS4xNTE2IDMuNDgzNiAyLjYxOTkgNS4wMDk1IDQuNDA0OXMyLjc3ODMgMy45NDQzIDMuNzU3MSA2LjQ3Nzl6bS0xMDAuNjQgMTYuMDY1Yy0wLjk3ODggMC0xLjk0MzMtMC4zNTk5LTIuODkzMy0xLjA3OTctMC45NTAxLTAuNzE5Ny0xLjY4NDMtMS43NDE4LTIuMjAyNS0zLjA2NjJsLTEuODEzOC01LjE4MjJjMC44MDYyLTAuNDYwNyAxLjc0MTgtMC43Nzc0IDIuODA3MS0wLjk1MDEgMS4wNjUyLTAuMTcyOCAyLjExNi0wLjE3MjggMy4xNTI1IDAgMS4wMzY0IDAuMTcyNyAxLjk3MjEgMC41NjE0IDIuODA3IDEuMTY2czEuNDI1MSAxLjQ4MjcgMS43NzA2IDIuNjM0M2MwLjIzMDMgMC42MzM0IDAuMzQ1NSAxLjMyNDQgMC4zNDU1IDIuMDcyOSAwIDEuMjA5Mi0wLjM1OTkgMi4yNDU3LTEuMDc5NiAzLjEwOTQtMC43MTk4IDAuODYzNy0xLjY4NDMgMS4yOTU2LTIuODkzNSAxLjI5NTZ6bTgxLjY0MiAwYy0wLjk3ODggMC0xLjk0MzMtMC4zNTk5LTIuODkzNC0xLjA3OTctMC45NS0wLjcxOTctMS42ODQyLTEuNzQxOC0yLjIwMjQtMy4wNjYybC0xLjgxMzgtNS4xODIyYzAuODA2MS0wLjQ2MDcgMS43NDE4LTAuNzc3NCAyLjgwNzEtMC45NTAxIDEuMDY1Mi0wLjE3MjggMi4xMTYtMC4xNzI4IDMuMTUyNSAwIDEuMDM2NCAwLjE3MjcgMS45NzIxIDAuNTYxNCAyLjgwNyAxLjE2NnMxLjQyNTEgMS40ODI3IDEuNzcwNiAyLjYzNDNjMC4yMzAzIDAuNjMzNCAwLjM0NTUgMS4zMjQ0IDAuMzQ1NSAyLjA3MjkgMCAxLjIwOTItMC4zNTk5IDIuMjQ1Ny0xLjA3OTcgMy4xMDk0LTAuNzE5NyAwLjg2MzctMS42ODQyIDEuMjk1Ni0yLjg5MzQgMS4yOTU2eiIgZmlsbD0iI[COLOR]gZmlsbC1ydWxlPSJldmVub2RkIi8+PC9nPjwvZz48L3N2Zz4KCg==",
                    ],
  ],



  "dir"                 =>  [
# --------------------------------------------------------------------
    "core"              =>  $core=THE_NAME_OF_THE_CORE_DIR."/",
    "fonts"             =>  "fonts/",
    "includes"          =>  $core."inc/",
    "libraries"         =>  $core."lib/",
    "images"            =>  $img="img/",
    "download"          =>  "download/",
    "scripts"           =>  "js/",
    "styles"            =>  "css/",
  ],



  "file"                =>  [
# --------------------------------------------------------------------
    "conf"              =>  THE_NAME_OF_THE_CONFIGURATION_FILE,
    "header"            =>  ($theme==""?"":$theme."_")."header",
    "index"             =>  "index",
    "footer"            =>  ($theme==""?"":$theme."_")."footer",
    "md-container"      =>  "md-container",
    "style"             =>  ($theme==""?"":$theme."_")."style",
    "script"            =>  ($theme==""?"":$theme."_")."functions",
    "the404"            =>  "404",
  ],



  "markdown"  =>  [
# --------------------------------------------------------------------
    "lib"     =>  "parsedown",
    "files"   =>  "Parsedown.php|ParsedownExtra.php|ParsedownExtraPlugin.php",
  ],



  "site"                =>  [
# --------------------------------------------------------------------
    "charset"           =>  "utf-8",  # Ref: http://htmlpurifier.org/docs/enduser-utf8.html
    "x_ua_compatible"   =>  "IE=edge",  # Ref: https://stackoverflow.com/a/14611323
    "viewport"          =>  "width=device-width, initial-scale=1", # Ref: https://developer.mozilla.org/en-US/docs/Mozilla/Mobile/Viewport_meta_tag
    "generator"         =>  "Your favourite code editor",  # Ref: https://creativebloq.com/advice/5-top-code-editors-for-programmers
    "robots"            =>  "index, follow", # Ref: https://www.searchenginejournal.com/best-practices-setting-meta-robots-tags-robots-txt/
    "langs"             =>  "en en-US m/d/Y|gal gl-ES d/m/Y|es es-ES d/m/Y",
                             # Order matters. First language is the main language
                             # Examples: en en-US m/d/Y ltr|es es-ES d/m/Y ltr|gal gl-ES d/m/Y ltr|ar ar-MA d/m/Y rtl|zh zh-CN ttb Y-m-d
    "markdown"          =>  true,  # Use or not the Markdown syntax
    "homepage"          =>  $homepage="home",
    "homepage_redirect" =>  "", # date("Y") to match the present year
    "sections"          =>  [
                 "demo" =>  [
                 "link" =>  "demo",
                   "en" =>  "Demo",
                   "es" =>  "Demo",
                  "gal" =>  "Demo",
                            ],
               "github" =>  [
                 "link" =>  "https://github.com/quenerapu/miniTRECE",
                   "en" =>  "miniTRECE on GitHub",
                   "es" =>  "miniTRECE en GitHub",
                  "gal" =>  "miniTRECE en GitHub",
                            ],
                            ],
  ],



  "meta"                =>  [
# --------------------------------------------------------------------
    "name"              =>  [
                   "en" =>  "Site name",
                  "gal" =>  "Nome do sitio web",
                   "es" =>  "Nombre del sitio web",
                            ],
    "title"             =>  [
                   "en" =>  "Site title",
                  "gal" =>  "Título do sitio web",
                   "es" =>  "Título del sitio web",
                            ],
    "description"       =>  [
                   "en" =>  "My website description",
                  "gal" =>  "Descrición do sitio web",
                   "es" =>  "Descripción del sitio web",
                            ],
    "keywords"          =>  "word, another word, three more words, etc",
    "image"             =>  [
                 "file" =>  "https://mini.trece.io/img/og/trece.jpg",
          "description" =>  [
                   "en" =>  "Image description",
                  "gal" =>  "Descripción da imaxe",
                   "es" =>  "Descripción de la imagen",
                            ],
                            ],
  ],



  "contact"         =>  [
# --------------------------------------------------------------------
    "address_line1" =>  "Where the streets have no name",
    "address_line2" =>  "12345 City",
    "address_line3" =>  [
               "en" => "Country (State)",
               "es" => "Región (País)",
              "gal" => "Rexión (País)",
                        ],
    "phone_no"      =>  "+xx xxxxxxxxx",
    "email"         =>  "email@domain.com",
    "telegram"      =>  "yourtelegramusername", #Telegram URL without t.me
    "twitter"       =>  "yourtwitterusername", #Twitter username without @
    "instagram"     =>  "yourinstagramusername", #Instagram username without @
    "facebook"      =>  "yourfacebookusername", #Facebook username without @
    "youtube"       =>  "youtube-channel",
    "fb_app_id"     =>  "123456789012345",  # Get yours at https://developers.facebook.com/apps
    "disqus"        =>  "@yourdisqususername",
    "geo"           =>  [
           "region" =>  "xx",         # Georegion http://geo-tag.de/generator
         "latitude" =>  "00.000000",  # Geoposition (latitude) http://geo-tag.de/generator
        "longitude" =>  "00.000000",  # Geoposition (longitude) (ICBM) http://geo-tag.de/generator
        "placename" =>  "City",       # Website's placename http://geo-tag.de/generator
                        ],
  ],



  "version"                             =>  [
# --------------------------------------------------------------------
    "min_php"                           =>  "7.1.30",
    "animatecss"                        =>  "3.7.0",          # Animate CSS http://daneden.github.io/animate.css/
    "blueimp_file_upload"               =>  "9.28.0",         # Blueimp jQuery File Upload https://blueimp.github.io/jQuery-File-Upload/
    "blueimp_gallery"                   =>  "2.33.0",         # Blueimp Gallery https://blueimp.github.io/Gallery/
    "blueimp_javascript-canvas-to-blob" =>  "3.14.0",         # Blueimp JavaScript Canvas to Blob https://github.com/blueimp/JavaScript-Canvas-to-Blob/
    "blueimp_JavaScript_Templates"      =>  "3.11.0",         # Blueimp JavaScript Templates https://blueimp.github.io/JavaScript-Templates/
    "blueimp_load_image"                =>  "2.20.1",         # Blueimp JavaScript Load Image https://blueimp.github.io/JavaScript-Load-Image/
    "bootstrap"                         =>  "3.4.0",          # Bootstrap https://getbootstrap.com/
    "bootstrap_colorpicker"             =>  "2.5.3",          # Bootstrap Colortimepicker https://farbelous.io/bootstrap-colorpicker/
    "bootstrap_datetimepicker"          =>  "4.17.47",        # Bootstrap Datetimepicker http://eonasdan.github.io/bootstrap-datetimepicker/
    "bootstrap_maxlength"               =>  "1.7.0",          # Bootstrap MaxLength http://mimo84.github.io/bootstrap-maxlength/
    "bootstrap_select"                  =>  "1.13.5",         # Bootstrap Select https://developer.snapappointments.com/bootstrap-select/
    "bootstrap_switch"                  =>  "3.3.4",          # Bootstrap Switch http://bootstrapswitch.site/
    "bootstrap_toggle"                  =>  "2.2.2",          # Bootstrap Toggle http://bootstraptoggle.com/
    "bootswatch"                        =>  "united",         # Bootswatch theme http://bootswatch.com/
    "clipboard_js"                      =>  "2.0.4",          # Clipboard.js https://clipboardjs.com/
    "cookieconsent2"                    =>  "3.1.0",          # Cookie Consent by Silktide Insites https://cookieconsent.insites.com/
    "croppie"                           =>  "2.6.3",          # Croppie http://foliotek.github.io/Croppie/
    "ekko_lightbox"                     =>  "5.3.0",          # Bootstrap Lightbox (Ekko Lightbox) http://ashleydw.github.io/lightbox/
    "exif_js"                           =>  "2.3.0",          # Exif.js https://github.com/exif-js/exif-js/
    "fitty"                             =>  "2.2.6",          # Fitty https://rikschennink.github.io/fitty/
    "fontawesome"                       =>  "4.7.0",          # Font Awesome http://fontawesome.com/
//  "fontawesome"                       =>  "5.8.1",          # Font Awesome http://fontawesome.com/
    "fullcalendar"                      =>  "3.10.0",         # Fullcalendar https://fullcalendar.io/
    "he"                                =>  "1.2.0",          # he (for “HTML entities”) https://mths.be/he/
    "html5shiv"                         =>  "3.7.3",          # HTML5 Shiv http://github.com/aFarkas/html5shiv/
    "hideshowpassword"                  =>  "2.1.1",          # hideShowPassword https://github.com/cloudfour/hideShowPassword/
    "hover_css"                         =>  "2.3.1",          # https://ianlunn.co.uk/portfolio/hover-css/
    "i18next"                           =>  "14.0.1",         # i18next https://www.i18next.com/
    "imagehovercss"                     =>  "2.0.0",          # Image Hover http://imagehover.io/
    "ion_rangeslider"                   =>  "2.3.0",          # Ion RangeSlider https://github.com/IonDen/ion.rangeSlider/
    "jquery"                            =>  "3.3.1",          # jQuery http://jquery.com/
    "jqueryui"                          =>  "1.12.1",         # jQuery UI http://jqueryui.com/
    "jquery_confirm"                    =>  "3.3.4",          # jQuery Confirm http://craftpip.github.io/jquery-confirm/
    "jquery_form_validator"             =>  "2.3.79",         # jQuery Form Validator http://www.formvalidator.net/
    "jquery_iframe_transport"           =>  "1.0.1",          # jQuery Iframe Transport https://cmlenz.github.io/jquery-iframe-transport/
    "jquery_mask"                       =>  "1.14.15",        # jQuery Mask Plugin https://igorescobar.github.io/jQuery-Mask-Plugin/
    "modernizr"                         =>  "2.8.3",          # Modernizr https://modernizr.com/
    "moment"                            =>  "2.24.0",         # Moment JS http://momentjs.com/
    "multiscroll_js"                    =>  "0.2.2",          # Multiscroll JS http://alvarotrigo.com/multiScroll/
    "normalize_css"                     =>  "8.0.1",          # Normalize CSS http://necolas.github.io/normalize.css/
    "pwstrength_bootstrap"              =>  "3.0.2",          # jQuery Password Strength Meter https://github.com/ablanco/jquery.pwstrength.bootstrap/
    "rangesliders"                      =>  "2.3.2",          # Rangeslider.js https://github.com/andreruffert/rangeslider.js/
    "respond_js"                        =>  "1.4.2",          # Respond JS http://github.com/scottjehl/Respond/
    "responsive_toolkit"                =>  "2.6.3",          # Responsive Bootstrap Toolkit https://github.com/maciej-gurban/responsive-bootstrap-toolkit/
    "selectize"                         =>  "0.12.6",         # Selectize https://selectize.github.io/selectize.js/
    "sprintf"                           =>  "1.1.2",          # sprintf.js https://github.com/alexei/sprintf.js/
    "tinymce"                           =>  "4.9.5",          # TinyMCE http://www.tinymce.com/
//  "tinymce"                           =>  "5.0.12",         # TinyMCE http://www.tinymce.com/ Warning: file_browser_callback is deprecated in TinyMCE 5
    "touchswipe"                        =>  "1.6.19",         # touchSwipe http://labs.skinkers.com/touchSwipe/
    "x-editable"                        =>  "1.5.1",          # X-editable https://vitalets.github.io/x-editable/
  ],



  "css"               =>  [
# --------------------------------------------------------------------
    "paddingtop_h"    =>  150,        # Padding-top (pixels) for the Body
    "stickyfooter_h"  =>  200,        # Height (pixels) for the Bootstrap Sticky Footer
  ],



];
