@ECHO OFF
setlocal enabledelayedexpansion
for %%f in (D:\drive\onedrive\Desktop\t1\*.zip) do (
  set /p val=<%%f
  echo "fullname: %%f"
  echo "name: %%~nf"
  echo "contents: !val!"
)
pause