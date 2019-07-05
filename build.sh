rm -rf build
mkdir build
#php scripts/builddocs.php
cp *.rst build
cp conf.py build/
cp Makefile build/
cp -r images build/images
cd build
make html
cd -
