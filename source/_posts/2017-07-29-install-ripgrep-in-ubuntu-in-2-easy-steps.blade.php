---
title: Install ripgrep in Ubuntu in 2 easy steps
excerpt: The easiest way to install ripgrep in Ubuntu.
date: July 29, 2017
category: Tutorial
keywords: atom editor, ubuntu, linux brew, install ripgrep
---

@extends('_layouts.master')

@section('contents')
    <article>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <p>
                        If you are using Atom Editor to develop your Laravel application, there is a chance that you are using the <a href="https://atom.io/packages/goto-definition">Goto Definition</a> plugin. We know that in this plugin's settings, there is an option called <em>Performance Mode</em>, it is a faster way of searching for files within your project. However, you cannot just enable it and use it immediately, this setting requires that you have <strong>ripgrep</strong> installed. If you are using Ubuntu and find the installation of ripgrep difficult, then this post will help you.
                    </p>

                    <p>
                        The easiest way to install ripgrep is by using Homebrew which is exclusive for MacOS users only, luckily there is a fork of that project made for Linux users, the <a href="http://linuxbrew.sh/">Linuxbrew</a>.
                    </p>

                    @yield('box-ad')

                    <h3>2 steps to install ripgrep in your Ubuntu</h3>

                    <p>
                        <ul>
                            <li>Install Linuxbrew on your machine</li>
                            <li>Run <code>brew install ripgrep</code></li>
                        </ul>

                        <em>Note: Depending on your internet connection, installing ripgrep may take some time as it needs to download some other dependencies.</em>
                    </p>

                    <p>
                        That's it, after installing ripgrep, you may now enable Performance Mode in your Atom Editor's Goto Definition.
                    </p>
                </div>
            </div>
        </div>
    </article>
@endsection
