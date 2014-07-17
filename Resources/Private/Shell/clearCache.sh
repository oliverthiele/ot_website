#!/bin/bash
path=`dirname $(readlink -f ${0})`;
cd $path
echo "Delete typo3temp/Cache/*"
rm ../../../../../../typo3temp/Cache/* -rf
echo "Truncate all TYPO3 caching tables:"
./TruncateCache.phpsh
