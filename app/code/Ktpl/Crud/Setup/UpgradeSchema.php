<?php
namespace Krish\Employee\Setup;

use Magento\Framework\Setup\UpgradeSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Catalog\Model\ResourceModel\Product\Gallery;
use Magento\Catalog\Model\Product\Attribute\Backend\Media\ImageEntryConverter;


class UpgradeSchema implements UpgradeSchemaInterface
{
    
    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        if (version_compare($context->getVersion(), '2.1.0', '<')) {

            $tableName = $setup->getTable('krish_employee');
            $setup->getConnection()->addColumn($tableName, 'address', [
                'type' => \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                'length'    => 255,
                'unsigned' => true,
                'nullable' => false,
                'default' => '0',
                'comment' => 'Address'
            ]);

            $setup->getConnection()->addColumn($tableName, 'start_date', [
                'type' => \Magento\Framework\DB\Ddl\Table::TYPE_DATE,
                'length'    => 255,
                'unsigned' => true,
                'nullable' => false,
                'default' =>  '0',
                'comment' => 'Date'
            ]);

            $setup->getConnection()->addColumn($tableName, 'team', [
                'type' => \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                'length'    => 255,
                'unsigned' => true,
                'nullable' => false,
                'default' => '0',
                'comment' => 'Team'
            ]);

            $setup->getConnection()->addColumn($tableName, 'gender', [
                'type' => \Magento\Framework\DB\Ddl\Table::TYPE_SMALLINT,
                'length'    => 255,
                'unsigned' => true,
                'nullable' => false,
                'default' => '0',
                'comment' => 'Gender'
            ]);  

            $setup->getConnection()->addColumn($tableName, 'city', [
                'type' => \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                'length'    => 255,
                'unsigned' => true,
                'nullable' => false,
                'default' => '0',
                'comment' => 'city'
            ]);   

            $setup->getConnection()->addColumn($tableName, 'status', [
                'type' => \Magento\Framework\DB\Ddl\Table::TYPE_SMALLINT,
                'length'    => 255,
                'unsigned' => true,
                'nullable' => false,
                'default' => '0',
                'comment' => 'status'
            ]);         
            
            $setup->getConnection()->addColumn($tableName, 'term', [
                'type' => \Magento\Framework\DB\Ddl\Table::TYPE_SMALLINT,
                'length'    => 255,
                'unsigned' => true,
                'nullable' => false,
                'default' => '0',
                'comment' => 'term'
            ]);

        }
        
        $setup->endSetup();
    }
}