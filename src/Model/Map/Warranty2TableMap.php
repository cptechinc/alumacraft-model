<?php

namespace Map;

use \Warranty2;
use \Warranty2Query;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\InstancePoolTrait;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\DataFetcher\DataFetcherInterface;
use Propel\Runtime\Exception\PropelException;
use Propel\Runtime\Map\RelationMap;
use Propel\Runtime\Map\TableMap;
use Propel\Runtime\Map\TableMapTrait;


/**
 * This class defines the structure of the 'WARRANTY2' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class Warranty2TableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.Warranty2TableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'WARRANTY2';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\Warranty2';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'Warranty2';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 30;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 30;

    /**
     * the column name for the WarmSeq field
     */
    const COL_WARMSEQ = 'WARRANTY2.WarmSeq';

    /**
     * the column name for the InitItemNbr field
     */
    const COL_INITITEMNBR = 'WARRANTY2.InitItemNbr';

    /**
     * the column name for the SermSerNbr field
     */
    const COL_SERMSERNBR = 'WARRANTY2.SermSerNbr';

    /**
     * the column name for the WarmSaleDate field
     */
    const COL_WARMSALEDATE = 'WARRANTY2.WarmSaleDate';

    /**
     * the column name for the WarmOwnFname field
     */
    const COL_WARMOWNFNAME = 'WARRANTY2.WarmOwnFname';

    /**
     * the column name for the WarmOwnMname field
     */
    const COL_WARMOWNMNAME = 'WARRANTY2.WarmOwnMname';

    /**
     * the column name for the WarmOwnLname field
     */
    const COL_WARMOWNLNAME = 'WARRANTY2.WarmOwnLname';

    /**
     * the column name for the WarmOwnAdr1 field
     */
    const COL_WARMOWNADR1 = 'WARRANTY2.WarmOwnAdr1';

    /**
     * the column name for the WarmOwnAdr2 field
     */
    const COL_WARMOWNADR2 = 'WARRANTY2.WarmOwnAdr2';

    /**
     * the column name for the WarmOwnAdr3 field
     */
    const COL_WARMOWNADR3 = 'WARRANTY2.WarmOwnAdr3';

    /**
     * the column name for the WarmOwnCity field
     */
    const COL_WARMOWNCITY = 'WARRANTY2.WarmOwnCity';

    /**
     * the column name for the WarmOwnStat field
     */
    const COL_WARMOWNSTAT = 'WARRANTY2.WarmOwnStat';

    /**
     * the column name for the WarmOwnZip field
     */
    const COL_WARMOWNZIP = 'WARRANTY2.WarmOwnZip';

    /**
     * the column name for the WarmSordNbr field
     */
    const COL_WARMSORDNBR = 'WARRANTY2.WarmSordNbr';

    /**
     * the column name for the WarmInvcDate field
     */
    const COL_WARMINVCDATE = 'WARRANTY2.WarmInvcDate';

    /**
     * the column name for the WarmCustId field
     */
    const COL_WARMCUSTID = 'WARRANTY2.WarmCustId';

    /**
     * the column name for the WarmSpId field
     */
    const COL_WARMSPID = 'WARRANTY2.WarmSpId';

    /**
     * the column name for the WarmEntryDate field
     */
    const COL_WARMENTRYDATE = 'WARRANTY2.WarmEntryDate';

    /**
     * the column name for the RegisterMotor field
     */
    const COL_REGISTERMOTOR = 'WARRANTY2.RegisterMotor';

    /**
     * the column name for the WarmEngSerNbr field
     */
    const COL_WARMENGSERNBR = 'WARRANTY2.WarmEngSerNbr';

    /**
     * the column name for the WarmEngHorse field
     */
    const COL_WARMENGHORSE = 'WARRANTY2.WarmEngHorse';

    /**
     * the column name for the WarmEngModelYear field
     */
    const COL_WARMENGMODELYEAR = 'WARRANTY2.WarmEngModelYear';

    /**
     * the column name for the WarmEngDesc field
     */
    const COL_WARMENGDESC = 'WARRANTY2.WarmEngDesc';

    /**
     * the column name for the WarmPhone1 field
     */
    const COL_WARMPHONE1 = 'WARRANTY2.WarmPhone1';

    /**
     * the column name for the WarmPhone2 field
     */
    const COL_WARMPHONE2 = 'WARRANTY2.WarmPhone2';

    /**
     * the column name for the WarmEmail field
     */
    const COL_WARMEMAIL = 'WARRANTY2.WarmEmail';

    /**
     * the column name for the DateUpdtd field
     */
    const COL_DATEUPDTD = 'WARRANTY2.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    const COL_TIMEUPDTD = 'WARRANTY2.TimeUpdtd';

    /**
     * the column name for the WarmDelvDate field
     */
    const COL_WARMDELVDATE = 'WARRANTY2.WarmDelvDate';

    /**
     * the column name for the Dummy field
     */
    const COL_DUMMY = 'WARRANTY2.Dummy';

    /**
     * The default string format for model objects of the related table
     */
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        self::TYPE_PHPNAME       => array('Warmseq', 'Inititemnbr', 'Sermsernbr', 'Warmsaledate', 'Warmownfname', 'Warmownmname', 'Warmownlname', 'Warmownadr1', 'Warmownadr2', 'Warmownadr3', 'Warmowncity', 'Warmownstat', 'Warmownzip', 'Warmsordnbr', 'Warminvcdate', 'Warmcustid', 'Warmspid', 'Warmentrydate', 'Registermotor', 'Warmengsernbr', 'Warmenghorse', 'Warmengmodelyear', 'Warmengdesc', 'Warmphone1', 'Warmphone2', 'Warmemail', 'Dateupdtd', 'Timeupdtd', 'Warmdelvdate', 'Dummy', ),
        self::TYPE_CAMELNAME     => array('warmseq', 'inititemnbr', 'sermsernbr', 'warmsaledate', 'warmownfname', 'warmownmname', 'warmownlname', 'warmownadr1', 'warmownadr2', 'warmownadr3', 'warmowncity', 'warmownstat', 'warmownzip', 'warmsordnbr', 'warminvcdate', 'warmcustid', 'warmspid', 'warmentrydate', 'registermotor', 'warmengsernbr', 'warmenghorse', 'warmengmodelyear', 'warmengdesc', 'warmphone1', 'warmphone2', 'warmemail', 'dateupdtd', 'timeupdtd', 'warmdelvdate', 'dummy', ),
        self::TYPE_COLNAME       => array(Warranty2TableMap::COL_WARMSEQ, Warranty2TableMap::COL_INITITEMNBR, Warranty2TableMap::COL_SERMSERNBR, Warranty2TableMap::COL_WARMSALEDATE, Warranty2TableMap::COL_WARMOWNFNAME, Warranty2TableMap::COL_WARMOWNMNAME, Warranty2TableMap::COL_WARMOWNLNAME, Warranty2TableMap::COL_WARMOWNADR1, Warranty2TableMap::COL_WARMOWNADR2, Warranty2TableMap::COL_WARMOWNADR3, Warranty2TableMap::COL_WARMOWNCITY, Warranty2TableMap::COL_WARMOWNSTAT, Warranty2TableMap::COL_WARMOWNZIP, Warranty2TableMap::COL_WARMSORDNBR, Warranty2TableMap::COL_WARMINVCDATE, Warranty2TableMap::COL_WARMCUSTID, Warranty2TableMap::COL_WARMSPID, Warranty2TableMap::COL_WARMENTRYDATE, Warranty2TableMap::COL_REGISTERMOTOR, Warranty2TableMap::COL_WARMENGSERNBR, Warranty2TableMap::COL_WARMENGHORSE, Warranty2TableMap::COL_WARMENGMODELYEAR, Warranty2TableMap::COL_WARMENGDESC, Warranty2TableMap::COL_WARMPHONE1, Warranty2TableMap::COL_WARMPHONE2, Warranty2TableMap::COL_WARMEMAIL, Warranty2TableMap::COL_DATEUPDTD, Warranty2TableMap::COL_TIMEUPDTD, Warranty2TableMap::COL_WARMDELVDATE, Warranty2TableMap::COL_DUMMY, ),
        self::TYPE_FIELDNAME     => array('WarmSeq', 'InitItemNbr', 'SermSerNbr', 'WarmSaleDate', 'WarmOwnFname', 'WarmOwnMname', 'WarmOwnLname', 'WarmOwnAdr1', 'WarmOwnAdr2', 'WarmOwnAdr3', 'WarmOwnCity', 'WarmOwnStat', 'WarmOwnZip', 'WarmSordNbr', 'WarmInvcDate', 'WarmCustId', 'WarmSpId', 'WarmEntryDate', 'RegisterMotor', 'WarmEngSerNbr', 'WarmEngHorse', 'WarmEngModelYear', 'WarmEngDesc', 'WarmPhone1', 'WarmPhone2', 'WarmEmail', 'DateUpdtd', 'TimeUpdtd', 'WarmDelvDate', 'Dummy', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Warmseq' => 0, 'Inititemnbr' => 1, 'Sermsernbr' => 2, 'Warmsaledate' => 3, 'Warmownfname' => 4, 'Warmownmname' => 5, 'Warmownlname' => 6, 'Warmownadr1' => 7, 'Warmownadr2' => 8, 'Warmownadr3' => 9, 'Warmowncity' => 10, 'Warmownstat' => 11, 'Warmownzip' => 12, 'Warmsordnbr' => 13, 'Warminvcdate' => 14, 'Warmcustid' => 15, 'Warmspid' => 16, 'Warmentrydate' => 17, 'Registermotor' => 18, 'Warmengsernbr' => 19, 'Warmenghorse' => 20, 'Warmengmodelyear' => 21, 'Warmengdesc' => 22, 'Warmphone1' => 23, 'Warmphone2' => 24, 'Warmemail' => 25, 'Dateupdtd' => 26, 'Timeupdtd' => 27, 'Warmdelvdate' => 28, 'Dummy' => 29, ),
        self::TYPE_CAMELNAME     => array('warmseq' => 0, 'inititemnbr' => 1, 'sermsernbr' => 2, 'warmsaledate' => 3, 'warmownfname' => 4, 'warmownmname' => 5, 'warmownlname' => 6, 'warmownadr1' => 7, 'warmownadr2' => 8, 'warmownadr3' => 9, 'warmowncity' => 10, 'warmownstat' => 11, 'warmownzip' => 12, 'warmsordnbr' => 13, 'warminvcdate' => 14, 'warmcustid' => 15, 'warmspid' => 16, 'warmentrydate' => 17, 'registermotor' => 18, 'warmengsernbr' => 19, 'warmenghorse' => 20, 'warmengmodelyear' => 21, 'warmengdesc' => 22, 'warmphone1' => 23, 'warmphone2' => 24, 'warmemail' => 25, 'dateupdtd' => 26, 'timeupdtd' => 27, 'warmdelvdate' => 28, 'dummy' => 29, ),
        self::TYPE_COLNAME       => array(Warranty2TableMap::COL_WARMSEQ => 0, Warranty2TableMap::COL_INITITEMNBR => 1, Warranty2TableMap::COL_SERMSERNBR => 2, Warranty2TableMap::COL_WARMSALEDATE => 3, Warranty2TableMap::COL_WARMOWNFNAME => 4, Warranty2TableMap::COL_WARMOWNMNAME => 5, Warranty2TableMap::COL_WARMOWNLNAME => 6, Warranty2TableMap::COL_WARMOWNADR1 => 7, Warranty2TableMap::COL_WARMOWNADR2 => 8, Warranty2TableMap::COL_WARMOWNADR3 => 9, Warranty2TableMap::COL_WARMOWNCITY => 10, Warranty2TableMap::COL_WARMOWNSTAT => 11, Warranty2TableMap::COL_WARMOWNZIP => 12, Warranty2TableMap::COL_WARMSORDNBR => 13, Warranty2TableMap::COL_WARMINVCDATE => 14, Warranty2TableMap::COL_WARMCUSTID => 15, Warranty2TableMap::COL_WARMSPID => 16, Warranty2TableMap::COL_WARMENTRYDATE => 17, Warranty2TableMap::COL_REGISTERMOTOR => 18, Warranty2TableMap::COL_WARMENGSERNBR => 19, Warranty2TableMap::COL_WARMENGHORSE => 20, Warranty2TableMap::COL_WARMENGMODELYEAR => 21, Warranty2TableMap::COL_WARMENGDESC => 22, Warranty2TableMap::COL_WARMPHONE1 => 23, Warranty2TableMap::COL_WARMPHONE2 => 24, Warranty2TableMap::COL_WARMEMAIL => 25, Warranty2TableMap::COL_DATEUPDTD => 26, Warranty2TableMap::COL_TIMEUPDTD => 27, Warranty2TableMap::COL_WARMDELVDATE => 28, Warranty2TableMap::COL_DUMMY => 29, ),
        self::TYPE_FIELDNAME     => array('WarmSeq' => 0, 'InitItemNbr' => 1, 'SermSerNbr' => 2, 'WarmSaleDate' => 3, 'WarmOwnFname' => 4, 'WarmOwnMname' => 5, 'WarmOwnLname' => 6, 'WarmOwnAdr1' => 7, 'WarmOwnAdr2' => 8, 'WarmOwnAdr3' => 9, 'WarmOwnCity' => 10, 'WarmOwnStat' => 11, 'WarmOwnZip' => 12, 'WarmSordNbr' => 13, 'WarmInvcDate' => 14, 'WarmCustId' => 15, 'WarmSpId' => 16, 'WarmEntryDate' => 17, 'RegisterMotor' => 18, 'WarmEngSerNbr' => 19, 'WarmEngHorse' => 20, 'WarmEngModelYear' => 21, 'WarmEngDesc' => 22, 'WarmPhone1' => 23, 'WarmPhone2' => 24, 'WarmEmail' => 25, 'DateUpdtd' => 26, 'TimeUpdtd' => 27, 'WarmDelvDate' => 28, 'Dummy' => 29, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, )
    );

    /**
     * Initialize the table attributes and columns
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('WARRANTY2');
        $this->setPhpName('Warranty2');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\Warranty2');
        $this->setPackage('');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('WarmSeq', 'Warmseq', 'INTEGER', true, 12, null);
        $this->addColumn('InitItemNbr', 'Inititemnbr', 'VARCHAR', true, 30, '');
        $this->addColumn('SermSerNbr', 'Sermsernbr', 'VARCHAR', true, 20, '');
        $this->addColumn('WarmSaleDate', 'Warmsaledate', 'INTEGER', false, 8, null);
        $this->addColumn('WarmOwnFname', 'Warmownfname', 'VARCHAR', false, 50, null);
        $this->addColumn('WarmOwnMname', 'Warmownmname', 'VARCHAR', false, 15, null);
        $this->addColumn('WarmOwnLname', 'Warmownlname', 'VARCHAR', false, 15, null);
        $this->addColumn('WarmOwnAdr1', 'Warmownadr1', 'VARCHAR', false, 30, null);
        $this->addColumn('WarmOwnAdr2', 'Warmownadr2', 'VARCHAR', false, 30, null);
        $this->addColumn('WarmOwnAdr3', 'Warmownadr3', 'VARCHAR', false, 30, null);
        $this->addColumn('WarmOwnCity', 'Warmowncity', 'VARCHAR', false, 16, null);
        $this->addColumn('WarmOwnStat', 'Warmownstat', 'VARCHAR', false, 3, null);
        $this->addColumn('WarmOwnZip', 'Warmownzip', 'VARCHAR', false, 10, null);
        $this->addColumn('WarmSordNbr', 'Warmsordnbr', 'INTEGER', false, 8, null);
        $this->addColumn('WarmInvcDate', 'Warminvcdate', 'INTEGER', false, 8, null);
        $this->addColumn('WarmCustId', 'Warmcustid', 'VARCHAR', false, 10, null);
        $this->addColumn('WarmSpId', 'Warmspid', 'VARCHAR', false, 10, null);
        $this->addColumn('WarmEntryDate', 'Warmentrydate', 'INTEGER', false, 8, null);
        $this->addColumn('RegisterMotor', 'Registermotor', 'VARCHAR', false, 2, null);
        $this->addColumn('WarmEngSerNbr', 'Warmengsernbr', 'VARCHAR', false, 20, null);
        $this->addColumn('WarmEngHorse', 'Warmenghorse', 'DECIMAL', false, 4, null);
        $this->addColumn('WarmEngModelYear', 'Warmengmodelyear', 'INTEGER', false, 8, null);
        $this->addColumn('WarmEngDesc', 'Warmengdesc', 'VARCHAR', false, 35, null);
        $this->addColumn('WarmPhone1', 'Warmphone1', 'VARCHAR', false, 12, null);
        $this->addColumn('WarmPhone2', 'Warmphone2', 'VARCHAR', false, 12, null);
        $this->addColumn('WarmEmail', 'Warmemail', 'VARCHAR', false, 50, null);
        $this->addColumn('DateUpdtd', 'Dateupdtd', 'INTEGER', false, 8, null);
        $this->addColumn('TimeUpdtd', 'Timeupdtd', 'INTEGER', false, 8, null);
        $this->addColumn('WarmDelvDate', 'Warmdelvdate', 'INTEGER', false, 8, null);
        $this->addColumn('Dummy', 'Dummy', 'VARCHAR', false, 1, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param array  $row       resultset row.
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     *
     * @return string The primary key hash of the row
     */
    public static function getPrimaryKeyHashFromRow($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        // If the PK cannot be derived from the row, return NULL.
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Warmseq', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Warmseq', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Warmseq', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Warmseq', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Warmseq', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Warmseq', TableMap::TYPE_PHPNAME, $indexType)];
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param array  $row       resultset row.
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     *
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        return (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 0 + $offset
                : self::translateFieldName('Warmseq', TableMap::TYPE_PHPNAME, $indexType)
        ];
    }

    /**
     * The class that the tableMap will make instances of.
     *
     * If $withPrefix is true, the returned path
     * uses a dot-path notation which is translated into a path
     * relative to a location on the PHP include_path.
     * (e.g. path.to.MyClass -> 'path/to/MyClass.php')
     *
     * @param boolean $withPrefix Whether or not to return the path with the class name
     * @return string path.to.ClassName
     */
    public static function getOMClass($withPrefix = true)
    {
        return $withPrefix ? Warranty2TableMap::CLASS_DEFAULT : Warranty2TableMap::OM_CLASS;
    }

    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param array  $row       row returned by DataFetcher->fetch().
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType The index type of $row. Mostly DataFetcher->getIndexType().
                                 One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     * @return array           (Warranty2 object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = Warranty2TableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = Warranty2TableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + Warranty2TableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = Warranty2TableMap::OM_CLASS;
            /** @var Warranty2 $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            Warranty2TableMap::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @param DataFetcherInterface $dataFetcher
     * @return array
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function populateObjects(DataFetcherInterface $dataFetcher)
    {
        $results = array();

        // set the class once to avoid overhead in the loop
        $cls = static::getOMClass(false);
        // populate the object(s)
        while ($row = $dataFetcher->fetch()) {
            $key = Warranty2TableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = Warranty2TableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var Warranty2 $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                Warranty2TableMap::addInstanceToPool($obj, $key);
            } // if key exists
        }

        return $results;
    }
    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param Criteria $criteria object containing the columns to add.
     * @param string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(Warranty2TableMap::COL_WARMSEQ);
            $criteria->addSelectColumn(Warranty2TableMap::COL_INITITEMNBR);
            $criteria->addSelectColumn(Warranty2TableMap::COL_SERMSERNBR);
            $criteria->addSelectColumn(Warranty2TableMap::COL_WARMSALEDATE);
            $criteria->addSelectColumn(Warranty2TableMap::COL_WARMOWNFNAME);
            $criteria->addSelectColumn(Warranty2TableMap::COL_WARMOWNMNAME);
            $criteria->addSelectColumn(Warranty2TableMap::COL_WARMOWNLNAME);
            $criteria->addSelectColumn(Warranty2TableMap::COL_WARMOWNADR1);
            $criteria->addSelectColumn(Warranty2TableMap::COL_WARMOWNADR2);
            $criteria->addSelectColumn(Warranty2TableMap::COL_WARMOWNADR3);
            $criteria->addSelectColumn(Warranty2TableMap::COL_WARMOWNCITY);
            $criteria->addSelectColumn(Warranty2TableMap::COL_WARMOWNSTAT);
            $criteria->addSelectColumn(Warranty2TableMap::COL_WARMOWNZIP);
            $criteria->addSelectColumn(Warranty2TableMap::COL_WARMSORDNBR);
            $criteria->addSelectColumn(Warranty2TableMap::COL_WARMINVCDATE);
            $criteria->addSelectColumn(Warranty2TableMap::COL_WARMCUSTID);
            $criteria->addSelectColumn(Warranty2TableMap::COL_WARMSPID);
            $criteria->addSelectColumn(Warranty2TableMap::COL_WARMENTRYDATE);
            $criteria->addSelectColumn(Warranty2TableMap::COL_REGISTERMOTOR);
            $criteria->addSelectColumn(Warranty2TableMap::COL_WARMENGSERNBR);
            $criteria->addSelectColumn(Warranty2TableMap::COL_WARMENGHORSE);
            $criteria->addSelectColumn(Warranty2TableMap::COL_WARMENGMODELYEAR);
            $criteria->addSelectColumn(Warranty2TableMap::COL_WARMENGDESC);
            $criteria->addSelectColumn(Warranty2TableMap::COL_WARMPHONE1);
            $criteria->addSelectColumn(Warranty2TableMap::COL_WARMPHONE2);
            $criteria->addSelectColumn(Warranty2TableMap::COL_WARMEMAIL);
            $criteria->addSelectColumn(Warranty2TableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(Warranty2TableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(Warranty2TableMap::COL_WARMDELVDATE);
            $criteria->addSelectColumn(Warranty2TableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.WarmSeq');
            $criteria->addSelectColumn($alias . '.InitItemNbr');
            $criteria->addSelectColumn($alias . '.SermSerNbr');
            $criteria->addSelectColumn($alias . '.WarmSaleDate');
            $criteria->addSelectColumn($alias . '.WarmOwnFname');
            $criteria->addSelectColumn($alias . '.WarmOwnMname');
            $criteria->addSelectColumn($alias . '.WarmOwnLname');
            $criteria->addSelectColumn($alias . '.WarmOwnAdr1');
            $criteria->addSelectColumn($alias . '.WarmOwnAdr2');
            $criteria->addSelectColumn($alias . '.WarmOwnAdr3');
            $criteria->addSelectColumn($alias . '.WarmOwnCity');
            $criteria->addSelectColumn($alias . '.WarmOwnStat');
            $criteria->addSelectColumn($alias . '.WarmOwnZip');
            $criteria->addSelectColumn($alias . '.WarmSordNbr');
            $criteria->addSelectColumn($alias . '.WarmInvcDate');
            $criteria->addSelectColumn($alias . '.WarmCustId');
            $criteria->addSelectColumn($alias . '.WarmSpId');
            $criteria->addSelectColumn($alias . '.WarmEntryDate');
            $criteria->addSelectColumn($alias . '.RegisterMotor');
            $criteria->addSelectColumn($alias . '.WarmEngSerNbr');
            $criteria->addSelectColumn($alias . '.WarmEngHorse');
            $criteria->addSelectColumn($alias . '.WarmEngModelYear');
            $criteria->addSelectColumn($alias . '.WarmEngDesc');
            $criteria->addSelectColumn($alias . '.WarmPhone1');
            $criteria->addSelectColumn($alias . '.WarmPhone2');
            $criteria->addSelectColumn($alias . '.WarmEmail');
            $criteria->addSelectColumn($alias . '.DateUpdtd');
            $criteria->addSelectColumn($alias . '.TimeUpdtd');
            $criteria->addSelectColumn($alias . '.WarmDelvDate');
            $criteria->addSelectColumn($alias . '.Dummy');
        }
    }

    /**
     * Returns the TableMap related to this object.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getServiceContainer()->getDatabaseMap(Warranty2TableMap::DATABASE_NAME)->getTable(Warranty2TableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(Warranty2TableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(Warranty2TableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new Warranty2TableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a Warranty2 or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or Warranty2 object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param  ConnectionInterface $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, ConnectionInterface $con = null)
     {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(Warranty2TableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Warranty2) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(Warranty2TableMap::DATABASE_NAME);
            $criteria->add(Warranty2TableMap::COL_WARMSEQ, (array) $values, Criteria::IN);
        }

        $query = Warranty2Query::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            Warranty2TableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                Warranty2TableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the WARRANTY2 table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return Warranty2Query::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a Warranty2 or Criteria object.
     *
     * @param mixed               $criteria Criteria or Warranty2 object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(Warranty2TableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from Warranty2 object
        }

        if ($criteria->containsKey(Warranty2TableMap::COL_WARMSEQ) && $criteria->keyContainsValue(Warranty2TableMap::COL_WARMSEQ) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.Warranty2TableMap::COL_WARMSEQ.')');
        }


        // Set the correct dbName
        $query = Warranty2Query::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // Warranty2TableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
Warranty2TableMap::buildTableMap();
