<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Migracion extends Migration
{

    public function up()
    {

        if (Schema::hasTable('customer')){
            Schema::Table('customer', function (Blueprint $table) {
                if(!Schema::hasColumn('customer', 'customer_code')){
                    $table->Int('customer_code', 30);
                }

                if(!Schema::hasColumn('customer', 'firs_name')){
                    $table->Char('firs_name', 40);
                }

                if(!Schema::hasColumn('customer', 'surname')){
                    $table->Char('surname', 40);
                }

                if(!Schema::hasColumn('customer', 'address')){
                    $table->Char('address', 100);
                }

                if(!Schema::hasColumn('customer', 'postcode')){
                    $table->Char('postcode', 40);
                }

                if(!Schema::hasColumn('customer', 'telephone_number')){
                    $table->Char('telephone_number', 40);
                }
            });
        }
        
        if (Schema::hasTable('poem_publication')){
            Schema::Table('poem_publication', function (Blueprint $table) {
                if(!Schema::hasColumn('poem_publication', 'poem')){
                    $table->Int('poem', 11);
                }

                if(!Schema::hasColumn('poem_publication', 'publication_code')){
                    $table->Int('publication_code', 11);
                }
            });
        }

        if (Schema::hasTable('poem')){
            Schema::Table('poem', function (Blueprint $table) {
                if(!Schema::hasColumn('poem', 'poem_code')){
                    $table->Int('poem_code', 30);
                }

                if(!Schema::hasColumn('poem', 'poem_title')){
                    $table->Char('poem_title', 50);
                }

                if(!Schema::hasColumn('poem', 'poem_contents')){
                    $table->Text('poem_contents');
                }

                if(!Schema::hasColumn('poem', 'poet_code')){
                    $table->Int('poet_code', 11);
                }

            });
        }

        if (Schema::hasTable('poet')){
            Schema::Table('poet', function (Blueprint $table) {
                if(!Schema::hasColumn('poet', 'poet_code')){
                    $table->Int('poet_code', 30);
                }

                if(!Schema::hasColumn('poet', 'firts_name')){
                    $table->Char('firts_name', 30);
                }

                if(!Schema::hasColumn('poet', 'surname')){
                    $table->Char('surname', 40);
                }

                if(!Schema::hasColumn('poet', 'address')){
                    $table->Char('address', 100);
                }

                if(!Schema::hasColumn('poet', 'postcode')){
                    $table->Char('postcode', 20);
                }

                if(!Schema::hasColumn('poet', 'telephone_number')){
                    $table->Char('telephone_number', 30);
                }
            });
        }

        if (Schema::hasTable('publication')){
            Schema::Table('publication', function (Blueprint $table) {
                if(!Schema::hasColumn('publication', 'publication_code')){
                    $table->Int('publication_code', 30);
                }

                if(!Schema::hasColumn('publication', 'title')){
                    $table->Char('title', 100);
                }

                if(!Schema::hasColumn('publication', 'price')){
                    $table->Decimal('price', 5,2);
                }
            });
        }

        if (Schema::hasTable('sale_publication')){
            Schema::Table('sale_publication', function (Blueprint $table) {
                if(!Schema::hasColumn('sale_publication', 'sale_code')){
                    $table->Int('sale_code', 11);
                }

                if(!Schema::hasColumn('sale_publication', 'publication_code')){
                    $table->Char('publication_code', 11);
                }
            });
        }
        
        if (Schema::hasTable('sale')){
            Schema::Table('sale', function (Blueprint $table) {
                if(!Schema::hasColumn('sale', 'sale_code')){
                    $table->Int('sale_code', 30);
                }

                if(!Schema::hasColumn('sale', 'fecha')){
                    $table->Date('fecha');
                }

                if(!Schema::hasColumn('sale', 'amount')){
                    $table->Decimal('amount');
                }

                if(!Schema::hasColumn('sale', 'customer_code')){
                    $table->Int('customer_code', 11);
                }
            });
        }

        else {
            Schema::Create('customer', function (Blueprint $table) {
                $table->Int('customer_code');
                $table->Char('firs_name', 30);
                $table->Char('surname', 40);
                $table->Char('address', 100);
                $table->Char('postcode', 20);
                $table->Char('telephone_number', 30);
            });

            Schema::Table('poem_publication', function (Blueprint $table) {
                    $table->Int('poem_code', 11);
                    $table->Int('publication_code', 11);
            });

            Schema::Create('poem', function (Blueprint $table) {
                $table->Int('poem_code', 11);
                $table->Char('poem_title', 50);
                $table->Text('poem_contents');
                $table->Int('address', 11);
            });

            Schema::Table('poet', function (Blueprint $table) {
                    $table->Int('poetCode', 11);
                    $table->Char('firts_name', 30);
                    $table->Char('surname', 40);
                    $table->Char('address', 100);
                    $table->Char('postcode', 20);
                    $table->Char('telephone_number', 30);
            });

            Schema::Table('publication', function (Blueprint $table) {
                    $table->Int('publication_code', 11);
                    $table->Char('title', 100);
                    $table->float('price', 5,2);
            });

            Schema::Table('sale_publication', function (Blueprint $table) {
                    $table->Int('sale_code', 11);
                    $table->Int('publication_code', 11);
            });

            Schema::Table('sale', function (Blueprint $table) {
                    $table->Int('sale_code', 11);
                    $table->Date('date');
                    $table->float('amount', 10,2);
                    $table->Int('customer_code', 11);
            });
            
        }
    }


    public function down()
    {
        Schema::table('customer', function (Blueprint $table) {
            Schema::dropIfExists('customer');
        });
        
        Schema::table('poem_publication', function (Blueprint $table) {
            Schema::dropIfExists('poema_publication');
        });

        Schema::table('poem', function (Blueprint $table) {
            Schema::dropIfExists('poem');
        });

        Schema::table('poet', function (Blueprint $table) {
            Schema::dropIfExists('poet');
        });

        Schema::table('publication', function (Blueprint $table) {
            Schema::dropIfExists('publication');
        });

        Schema::table('sale_publication', function (Blueprint $table) {
            Schema::dropIfExists('sale_publication');
        });

        Schema::table('sale', function (Blueprint $table) {
            Schema::dropIfExists('sale');
        });
    }
}