<?php
namespace TresdTech\FinalProject\Setup;

use Magento\Framework\Setup\UpgradeSchemaInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;

class UpgradeSchema implements UpgradeSchemaInterface
{
	public function upgrade( SchemaSetupInterface $setup, ModuleContextInterface $context ) {
		$installer = $setup;

		$installer->startSetup();

		if(version_compare($context->getVersion(), '1.1.0', '<')) {
			if (!$installer->tableExists('tresdtech_finalproject_post')) {
				$table = $installer->getConnection()->newTable(
					$installer->getTable('tresdtech_finalproject_post')
				)
					->addColumn(
						'post_id',
						\Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
						11,
						[
							'identity' => true,
							'nullable' => false,
							'primary'  => true,
							'unsigned' => true,
						],
						'Post ID'
					)
					->addColumn(
						'first_name',
						\Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
						255,
						['nullable' => false],
						'Post first Name'
					)
					->addColumn(
						'last_name',
						\Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
						255,
						['nullable' => false],
						'Post  last name'
					)
					->addColumn(
						'email',
						\Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
						255,
						['nullable' => false],
						'Post email'
					)
					->addColumn(
						'telephone',
						\Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
						255,
						['nullable' => false],
						'Post telephone'
					)->addColumn(
						'created_at',
						\Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP,
						null,
						['nullable' => false, 'default' => \Magento\Framework\DB\Ddl\Table::TIMESTAMP_INIT],
						'Created At'
					)->addColumn(
						'updated_at',
						\Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP,
						null,
						['nullable' => false, 'default' => \Magento\Framework\DB\Ddl\Table::TIMESTAMP_INIT_UPDATE],
						'Updated At')
					->setComment('Post Table');
				$installer->getConnection()->createTable($table);

				$installer->getConnection()->addIndex(
					$installer->getTable('tresdtech_finalproject_post'),
					$setup->getIdxName(
						$installer->getTable('tresdtech_finalproject_post'),
						['first_name','last_name','email','telephone'],
						\Magento\Framework\DB\Adapter\AdapterInterface::INDEX_TYPE_FULLTEXT
					),
					['first_name','last_name','email','telephone'],
					\Magento\Framework\DB\Adapter\AdapterInterface::INDEX_TYPE_FULLTEXT
				);
			}
		}

		$installer->endSetup();
	}
}