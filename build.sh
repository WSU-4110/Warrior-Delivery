#!/bin/sh
cd $TRAVIS_BUILD_DIR/
sbt ++$TRAVIS_SCALA_VERSION package
